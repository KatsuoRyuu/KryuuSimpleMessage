<?php
namespace KryuuSimpleMessage\View\Helper;

use Zend\View\Helper\AbstractHelper;
use Zend\ServiceManager\ServiceLocatorAwareInterface; 
use Zend\ServiceManager\ServiceLocatorInterface;

class FlashMessengerHelper extends AbstractHelper implements ServiceLocatorAwareInterface
{    
    
    public function __invoke($output=TRUE)
    {
		$this->setMessenger(
			$this->getServiceLocator()->get('flash_messenger')
		);
		if ($output == TRUE)
		{
			return $this->allMessages();
		}
		return $this;
    }

	public function getServiceLocator()
	{
		return $this->serviceLocator;
	}

	public function setServiceLocator(ServiceLocatorInterface $serviceLocator)
	{
		$this->serviceLocator = $serviceLocator;
	}
	
	public function getError($data=array())
	{
		return $this->getView()->render('partial/messages/error/head', array('data' =>$data)).
			$this->getView()->render('partial/messages/error/message', array('messenger' => $this->getMessenger())).
			$this->getView()->render('partial/messages/error/foot', array('data' =>$data));
	}
	public function getWarning($data=array())
	{
		return $this->getView()->render('partial/messages/warning/head', array('data' =>$data)).
			$this->getView()->render('partial/messages/warning/message', array('messenger' => $this->getMessenger())).
			$this->getView()->render('partial/messages/warning/foot', array('data' =>$data));
	}
	public function getSuccess($data=array())
	{
		return $this->getView()->render('partial/messages/success/head', array('data' =>$data)).
			$this->getView()->render('partial/messages/success/message', array('messenger' => $this->getMessenger())).
			$this->getView()->render('partial/messages/success/foot', array('data' =>$data));
	}
	public function getInfo($data=array())
	{
		return $this->getView()->render('partial/messages/info/head', array('data' =>$data)).
			$this->getView()->render('partial/messages/info/message', array('messenger' => $this->getMessenger())).
			$this->getView()->render('partial/messages/info/foot', array('data' =>$data));
	}
	public function getDefault($data=array())
	{
		return $this->getView()->render('partial/messages/default/head', array('data' =>$data)).
			$this->getView()->render('partial/messages/default/message', array('messenger' => $this->getMessenger())).
			$this->getView()->render('partial/messages/default/foot', array('data' =>$data));
	}
    
    public function getByNamespace($namespace,$data=array())
    {
        return $this->getView()->render('partial/messages/namespace/head', array('data' =>$data)).
			$this->getView()->render('partial/messages/namespace/message', array('messenger' => $this->getMessenger(), 'namespace' => $namespace)).
            $this->getView()->render('partial/messages/namespace/foot', array('data' =>$data));
    }
    
    private function allMessages($data=array())
    {
        return $this->getView()->render('partial/messages/all/head', array('data' =>$data)).
			$this->getView()->render('partial/messages/all/message', array('messenger' => $this->getMessenger())).		
            $this->getView()->render('partial/messages/all/foot', array('data' =>$data));

    }
    	
	private function setMessenger($messenger)
	{
		$this->messenger = $messenger;
	}
	
	private function getMessenger()
	{
		return $this->messenger;
	}
	

}