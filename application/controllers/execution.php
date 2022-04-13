<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Execution extends CI_Controller {
	public function __construct(){
		parent::__construct();
		  $this->load->library(['session']);
			$this->load->database();
			$this->load->model('AuditReportsModel', 'report');
	}

  public function index()
  {
    $this->load->view('execution/index');
  }

	public function run()
	{
		//var_dump($_POST['project']);var_dump($_POST['environment']);var_dump($_POST['testingTYpe']);var_dump($_POST['browsers']);exit;
		$Project = str_replace(' ', '', $_POST['project']);
		$Environment = $_POST['environment'];
		$TestingType = $_POST['testingTYpe'];
		$Browser = $_POST['browsers'];
		$Emails = str_replace(' ', '',$_POST['emails']);;
		
	if($TestingType=="Demo testing"){
			//$TestingType="demo";
			$TestingType="QA_Portal_Test";
		}
		elseif ($TestingType=="Build smoke testing"){
			$TestingType="BVT";
		}
		elseif ($TestingType=="System regression testing"){
			$TestingType="Regression";
		}
		

/*if($Environment=="Staging"){
			if($Project=="RevlonUK"){
				$URL="https://stage-uk.revlonhairtools.com/";
			}elseif($Project=="RevlonUS"){
				$URL="https://stg-upgrade.revlonhairtools.com/us_en/";
			}elseif($Project=="HotTools"){
				$URL="https://jetrails-m2-stag.hottools.com/";
			}
			elseif($Project=="Drybar"){
				//$URL="https://jetrails-staging.drybar.com/";
				
				$URL="https://jetrails-stage-upgrade.drybar.com/";
			}
			elseif($Project=="Braun"){
				//$URL="https://jetrails-stag.braunhealthcare.com/us_en ";
				$URL=" https://jetrails-stag.braunhealthcare.com/ ";
			}
		}*/
		
//staging urls//

if($Environment=="Staging")
{
if($Project=="RevlonUK")
{
$URL="https://stage-uk.revlonhairtools.com/ ";
}
	elseif($Project=="RevlonUS")
{
$URL="https://stg-upgrade.revlonhairtools.com";
}
	elseif($Project=="BraunUS")
{
$URL="https://jetrails-stag.braunhealthcare.com/";
}
	elseif($Project=="BraunEMEA")
{
$URL="https://jetrails-stg-upgrade.braunhealthcare.com/de_de/";
}
	elseif($Project=="oxo")
{
$URL="https://stg-upgrade.oxo.com/";
}
	elseif($Project=="Drybar")
{
//$URL="https://jetrails-staging.drybar.com/ ";
$URL="https://jetrails-stage-upgrade.drybar.com/";
}
	elseif($Project=="Febreze")
{
$URL="https://jetrails-stag-v1.febrezeairpurifiers.com";
}
	elseif($Project=="Honeywell")
{
$URL="https://jetrails-stag.honeywellpluggedin.com/ ";
}
	elseif($Project=="PUR")
{
$URL=" https://jetrails-stag.pur.com/";
}
	elseif($Project=="HotTools-b2c")
{
$URL="https://jetrails-m2-stag.hottools.com/";
}

	elseif($Project=="Stinger")
{
$URL="https://jetrails-stag-v1.stingerproducts.com/";
}

	elseif($Project=="Vicks")
{
$URL="https://jetrails-stag.vickshumidifiers.com/ ";
}
	elseif($Project=="HydroflaskUS")
{
$URL="https://jetrails-stg-upgrade.hydroflask.com/";
}
	elseif($Project=="HydroflaskEMEA")
{
$URL="http://jetrails-stg-upgrade.hydroflask.com/uk-en/";
}
}

		/*elseif ($Environment=="Production"){
			if($Project=="RevlonUK"){
				$URL="https://revlonhairtools.co.uk/";
			}elseif($Project=="RevlonUS"){
				$URL="https://revlonhairtools.com/";
			}elseif($Project=="HotTools"){
				$URL="https://www.hottools.com/";
			}
			
		}

		if($Project=="HotTools"){
			$Project="Hottools";
		}
		*/
	//production url//
	
	elseif ($Environment=="Production")
	{
	if($Project=="RevlonUK")
	{
	$URL="https://revlonhairtools.co.uk/";
	}
		elseif($Project=="RevlonUS")
	{
	$URL="https://www.revlonhairtools.com";
	}
		elseif($Project=="BraunUS")
	{
	$URL="https://www.braunhealthcare.com/us_en";
	}
		elseif($Project=="BraunEMEA")
	{
	$URL="https://www.braunhealthcare.com/de_de/";
	}
		elseif($Project=="oxo")
	{
	$URL="https://www.oxo.com/";
	}
		elseif($Project=="Drybar")
	{
	$URL="https://www.drybar.com/";
	}
		elseif($Project=="Febreze")
	{
	$URL="https://www.febrezeairpurifiers.com/";
	}
		elseif($Project=="Honeywell")
	{
	$URL="https://www.honeywellpluggedin.com/ ";
	}
		elseif($Project=="PUR")
	{
	$URL="https://www.pur.com/";
	}
		elseif($Project=="HotTools-b2c")
	{
	$URL="https://www.hottools.com/ ";
	}
	
		elseif($Project=="Stinger")
	{
	$URL="https://www.stingerproducts.com/";
	}
	
		elseif($Project=="Vicks")
	{
	$URL="https://www.vickshumidifiers.com/";
	}
		elseif($Project=="HydroflaskUS")
	{
	$URL="https://www.hydroflask.com/ ";
	}
		elseif($Project=="HydroflaskEMEA")
	{
	$URL="https://hydroflask.com/de-de/";
	}
	}
	// development urls//
	
	elseif ($Environment=="Development")
	{
	if($Project=="RevlonUK")
	{
	$URL="https://revlonhairtools.co.uk/";
	}
		elseif($Project=="RevlonUS")
	{
	$URL="https://dev-upgrade-m243.revlonhairtools.com";
	}
		elseif($Project=="BraunUS")
	{
	$URL="https://jetrails-dev.braunhealthcare.com/";
	}
		elseif($Project=="BraunEMEA")
	{
	$URL="https://jetrails-dev-emea.braunhealthcare.com/";
	}
		elseif($Project=="oxo")
	{
	$URL="https://dev-upgrade.oxo.com/";
	}
		elseif($Project=="Drybar")
	{
	$URL="https://jetrails-dev-upgrade.drybar.com/";
	}
		elseif($Project=="Febreze")
	{
	$URL=" ";
	}
		elseif($Project=="Honeywell")
	{
	$URL="https://jetrails-dev.honeywellpluggedin.com/";
	}
		elseif($Project=="PUR")
	{
	$URL="https://jetrails-dev.pur.com/";
	}
		elseif($Project=="HotTools-b2c")
	{
	$URL="https://jetrails-m24-dev.hottools.com/";
	}
	
		elseif($Project=="Stinger")
	{
	$URL=" ";
	}
	
		elseif($Project=="Vicks")
	{
	$URL="https://jetrails-dev.vickshumidifiers.com/";
	}
	
		elseif($Project=="Vickshumdifier")
	{
	$URL=" ";
	}
		elseif($Project=="HydroflaskUS")
	{
	$URL="https://jetrails-m24-dev-upgrade.hydroflask.com/";
	}
		elseif($Project=="HydroflaskEMEA")
	{
	$URL=" ";
	}
	}
	
			


		//$runURL = "http://jenkins.helenoftroy.com:8080/view/all/job/TestAutomation/job/RevlonSystemTests/buildWithParameters?delay=0sec&config=RevlonUK%5C%5Cconfig.properties&testNG=RevlonUK%5C%5CRevlonUK_ST.xml";
	//$runURL = "http://localhost:8080/view/all/job/TestAutomation/job/RevlonSystemTests/buildWithParameters?delay=0sec&config=Revelon\\config.properties&testNG=Revlon\\Revlon_demo.xml&mailId=hchiruvella@helenoftroy.com&BASEURL=https://stage.hottools.com/&browser=chrome&WEBSITE=Revlon";	//var_dump($runURL);exit;
	$runURL = "http://localhost:8080/view/all/job/TestAutomation/job/RevlonSystemTests/buildWithParameters?delay=0sec&config=" . $Project . "%5C%5Cconfig.properties&testNG=" . $Project . "%5C%5C" . $Project . "_" . $TestingType . ".xml&mailId=". $Emails ."&BASEURL=". $URL ."&browser=" . $Browser . "&WEBSITE=" . $Project;

	print_r($runURL);

	
	$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => $runURL,
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => '',
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 0,
		  CURLOPT_FOLLOWLOCATION => true,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => 'POST',
		  CURLOPT_USERPWD => "manasa:11b66536d01789dc1b942edd9bbd3075e3",
		  //CURLOPT_HTTPHEADER => array(),
		));


		$response = curl_exec($curl);

		curl_close($curl);
		$this->session->set_flashdata('run_response',$response);


		$status=$this->getrecorddetails();
		$nodestatus=$status->result;
		if(is_null($status->result)){
			$nodestatus="Running";
		}
		$BuildURL=$status->url;

			$domain = "http://localhost";
            $url = explode($domain,$BuildURL);
            $BuildURL = $domain.':8080'.$url[1];
			$Loggedinuser = $this->session->userdata('user')->fname ." " .$this->session->userdata('user')->lname;
			
	

		$record=array("Project"=>$this->input->post('project'),
				"Environment"=>$this->input->post('environment'),
				"TestingType"=>$this->input->post('testingTYpe'),
				"DeviceType"=>$this->input->post('device'),
				"Browser"=>$this->input->post('browsers'),
				"Devices"=>$this->input->post('devices'),
				"Machine"=>$this->input->post('machine'),
				//"TriggeredBy"=>"manasa@lotuswave.net",
				"TriggeredBy"=>$Loggedinuser,
				"JobStatus"=>$nodestatus,
				"ExecutionStatus"=>"Running",
				"BuildURL"=>$BuildURL,
				"Emails"=>$this->input->post('emails'));
		$this->load->database();
		$this->db->insert('ExecutionAudit',$record);
		//print_r($response);
		//var_dump($this->session->userdata('user')->email);
		//echo $response;
		redirect('auditreports');
	}

	function getrecorddetails() {


		$clientstatus=array();
		$curl = curl_init();

			curl_setopt_array($curl, array(
			CURLOPT_URL => 'http://localhost:8080/view/all/job/TestAutomation/job/RevlonSystemTests/lastBuild/api/json/',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'GET',
			CURLOPT_USERPWD => "manasa:11b66536d01789dc1b942edd9bbd3075e3",
			/*CURLOPT_HTTPHEADER => array(
				'Authorization: Basic bWNoaXJ1dmVsbGE6MTFjN2MxNzdiNzExZjgxZTVjN2MzZTUzMWY5NjE0ZmJiNg==',
				'Cookie: JSESSIONID.a3638212=node062785luglgeo1bw0khrqx96us432.node0'
			),*/
			));

			$response = curl_exec($curl);
			echo $response;
			
			curl_close($curl);
			$err=" ";
			if ($err) {
				echo "cURL Error #:" . $err;
			} else {
				//echo $response;
			}

		$status = json_decode($response);

		return $status;

	}

	public function getTestCases()
	{
		$Project = $this->input->get('project');
		$Environment = $this->input->get('environment');
		$testingTYpe = $this->input->get('testingTYpe');
		$Device = $this->input->get('device');
		$platform =  $this->input->get('platform');
		$result = $this->report->getTestCasesModel($Project, $Environment, $testingTYpe, $Device, $platform);
		echo json_encode($result);

	}
}
