<?php
class index extends BaseApp{
	public funciton __construct()
	{
		//to do...
	}
	
	public funciton index()
	{
		echo "go...";
	}
	
	public get exe_time()
	{
		echo date("Y-m-d H:i:s", time());//打印时间
	}

}