<?php
namespace KryuuSimpleMessage\View\Helper;

use Zend\View\Helper\AbstractHelper;
use Zend\ServiceManager\ServiceLocatorAwareInterface; 
use Zend\ServiceManager\ServiceLocatorInterface;

class FlashMessengerHelper extends AbstractHelper implements ServiceLocatorAwareInterface
{    
    
    private $header = array();
    private $footer = array();
    private $message = array();
    
    private $tmpHeaderName = null;
    private $tmpFooterName = null;
    private $tmpMessageName= null;
    
    private $config=null;
    private $function=null;
    
    private $messenger=null;
    
    public function __invoke($output=TRUE)
    {
		if ($output == TRUE)
		{
			return $this->get();
		}
		return $this;
    }
      	
    
	public function getServiceLocator()
	{
		return $this->serviceLocator;
	}
    
	public function setServiceLocator(ServiceLocatorInterface  $serviceLocator)
	{
		$this->serviceLocator = $serviceLocator;
	}
    
	public function setConfig($config)
	{
		$this->config = $config;
	}
	
	public function getMessenger()
	{
        if (!$this->messenger)
        {
            $this->messenger = $this->getServiceLocator()->get($this->config['messenger']);
        }
		return $this->messenger;
	}

    public function setHeaderView($header)
    {
        $this->tmpHeaderName = $header;
        return $this;
    }
	
    public function setFooterView($footer)
    {
        $this->tmpHeaderName = $footer;
        return $this;
    }
    
    public function setMessageView($message)
    {
        $this->tmpMessageName = $message;
        return $this;
    }
	
    public function get($data=array())
	{           
        if ($this->getMessenger()->hasMessages())
        {
            return $this->getRender($data,'default');
        }
	}
    
	public function getError($data=array())
	{   
        if ($this->getMessenger()->hasErrorMessages())
        {
            return $this->getRender($data,'error');
        }
    }
    
	public function getWarning($data=array())
	{            
        if ($this->getMessenger()->hasWarningMessages())
        {
            return $this->getRender($data,'warning');
        }
	}
	
    public function getSuccess($data=array())
	{            
        if ($this->getMessenger()->hasSuccessMessages())
        {
            return $this->getRender($data,'success');
        }
	}
	
    public function getInfo($data=array())
	{  
        if ($this->getMessenger()->hasInfoMessages())
        {
            return $this->getRender($data,'info');
        }
	}
    
    public function getByNamespace($namespace=null,$data=array())
    {
        if($namespace!=null)
        {
            if ($this->getMessenger()->setNamespace($namespace)->hasInfoMessages())
            {
                return $this->getRender($data,'namespace',$namespace);
            }
        }
    }
    
    public function getAll($data=array())
    {
        return $this->getRender($data,'all');
    }
    
    private function setViews($view)
    {
        $config = $this->config['partialSetup'];
        
        switch($view):
            case 'error':
                $this->tmpFooterName = $config['errorFooter'];
                $this->tmpHeaderName = $config['errorHeader'];
                $this->tmpMessageName= $config['errorMessage'];
                break;
            case 'warning':
                $this->tmpFooterName = $config['warningFooter'];
                $this->tmpHeaderName = $config['warningHeader'];
                $this->tmpMessageName= $config['warningMessage'];
                break;
            case 'success':
                $this->tmpFooterName = $config['successFooter'];
                $this->tmpHeaderName = $config['successHeader'];
                $this->tmpMessageName= $config['successMessage'];
                break;
            case 'info':
                $this->tmpFooterName = $config['infoFooter'];
                $this->tmpHeaderName = $config['infoHeader'];
                $this->tmpMessageName= $config['infoMessage'];
                break;
            case 'all':
                $this->tmpFooterName = $config['allFooter'];
                $this->tmpHeaderName = $config['allHeader'];
                $this->tmpMessageName= $config['allMessage'];
                break;
            case 'default':
                $this->tmpFooterName = $config['defaultFooter'];
                $this->tmpHeaderName = $config['defaultHeader'];
                $this->tmpMessageName= $config['defaultMessage'];
                break;
            case 'namespace':
                $this->tmpFooterName = $config['namespaceFooter'];
                $this->tmpHeaderName = $config['namespaceHeader'];
                $this->tmpMessageName= $config['namespaceMessage'];
                break;
        endswitch;
    }

    
    private function getRender($data=array(),$view='default',$namespace=null)
    {
        $this->setViews($view);

        $this->header[$this->tmpHeaderName]     = $this->getView()->render($this->tmpHeaderName, array('data' =>$data));
        $this->message[$this->tmpMessageName]   = $this->getView()->render($this->tmpMessageName, array('messenger' => $this->getMessenger(), 'namespace' => $namespace));
        $this->footer[$this->tmpFooterName]     = $this->getView()->render($this->tmpFooterName, array('data' =>$data));

        echo $this->header[$this->tmpHeaderName].
            $this->message[$this->tmpMessageName].
            $this->footer[$this->tmpFooterName];

    }
	

}