<?php 
/**
 * 
 */
class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('Home/index');
	}

	public function mobileElectronicMenu()
	{
		$this->load->view('Home/mobile-electronic-products-menu');
	}

	public function mobileMenFashionMenu()
	{
		$this->load->view('Home/mobile-men-fashion-products-menu');
	}

	public function mobileWomenFashionMenu()
	{
		$this->load->view('Home/mobile-women-fashion-products-menu');
	}

	public function mobileHomeAndFurnitureMenu()
	{
		$this->load->view('Home/mobile-home-and-furniture-products-menu');
	}

	public function mobileSportsAndStationeryMenu()
	{
		$this->load->view('Home/mobile-sports-and-stationery-products-menu');
	}

	public function mobileDailyNeedsMenu()
	{
		$this->load->view('Home/mobile-daily-needs-products-menu');
	}
}
?>