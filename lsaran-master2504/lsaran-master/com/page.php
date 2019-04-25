
<?php defined('INDEX') OR die('Прямой доступ к странице запрещён!');

$alias = $_GET['alias'];
$forPageTemp = "/templates/forPage";
$forPageQueri = "/com/dbPageQueries";


include($_SERVER['DOCUMENT_ROOT']."/templates/header.php");


switch ($alias) {
case 'lectors':
	$tab  = (empty($_GET['tab']))  ? -1 : $_GET['tab'];
	include ($_SERVER['DOCUMENT_ROOT'].$forPageQueri."/lectors.php");
	break;
case 'lectors_hist_list':
	$tab  = (empty($_GET['tab']))  ? -1 : $_GET['tab'];
	$year = (empty($_GET['year'])) ? -1 : $_GET['year'];
	include ($_SERVER['DOCUMENT_ROOT'].$forPageQueri."/lectors_hist_list.php");	
	break;
case 'recalls':
	include ($_SERVER['DOCUMENT_ROOT'].$forPageQueri."/recalls.php");	
	include ($_SERVER['DOCUMENT_ROOT'].$forPageTemp. "/recalls_t.php");
	break;
case 'schedule':
	include ($_SERVER['DOCUMENT_ROOT'].$forPageQueri."/schedule.php");	
	include ($_SERVER['DOCUMENT_ROOT'].$forPageTemp."/schedule_t.php");
	break;
case 'team':
	include ($_SERVER['DOCUMENT_ROOT'].$forPageQueri."/team.php");	
	include ($_SERVER['DOCUMENT_ROOT'].$forPageTemp."/team_t.php");
	break;
case 'evening_program':
	include ($_SERVER['DOCUMENT_ROOT'].$forPageQueri."/evening_program.php");	
	include ($_SERVER['DOCUMENT_ROOT'].$forPageTemp."/evening_program_t.php");
	break;
case 'team_list':	
	include ($_SERVER['DOCUMENT_ROOT'].$forPageQueri."/team_list.php");	
	include ($_SERVER['DOCUMENT_ROOT'].$forPageTemp."/team_list_t.php");
	break;
case 'princeps':
	include ($_SERVER['DOCUMENT_ROOT'].$forPageQueri."/princeps.php");	
	include ($_SERVER['DOCUMENT_ROOT'].$forPageTemp."/princeps_t.php");
	break;
case 'friends':
	include ($_SERVER['DOCUMENT_ROOT'].$forPageQueri."/friends.php");	
	include ($_SERVER['DOCUMENT_ROOT'].$forPageTemp."/friends_t.php");	
	break;
case 'partners':
	include ($_SERVER['DOCUMENT_ROOT'].$forPageQueri."/partners.php");	
	include ($_SERVER['DOCUMENT_ROOT'].$forPageTemp."/partners_t.php");		
	break;
case 'registration':
	include ($_SERVER['DOCUMENT_ROOT'].$forPageTemp."/registration/registration_t_blank.php");
	break;
case 'price':
	include ($_SERVER['DOCUMENT_ROOT'].$forPageTemp."/price_t.php");
	break;
case 'contacts':
	include ($_SERVER['DOCUMENT_ROOT'].$forPageTemp."/contacts_t.php");
	break;
case 'user_agreement':
	include ($_SERVER['DOCUMENT_ROOT'].$forPageTemp."/user_agreement_t.php");
	break;
case 'personal_data':
	include ($_SERVER['DOCUMENT_ROOT'].$forPageTemp."/personal_data_t.php");
	break;
case 'childrens_program':
	include ($_SERVER['DOCUMENT_ROOT'].$forPageTemp."/childrens_program_t.php");
	break;
case 'organizer':
	include ($_SERVER['DOCUMENT_ROOT'].$forPageTemp."/organizer_t.php");
	break;
case 'teenagers_program':
	include ($_SERVER['DOCUMENT_ROOT'].$forPageQueri."/teenagers_program.php");	
	include ($_SERVER['DOCUMENT_ROOT'].$forPageTemp."/teenagers_program_t.php");
	break;
case 'registrationForm':
	include ($_SERVER['DOCUMENT_ROOT'].$forPageQueri."/registrationForm.php");	
	include($_SERVER['DOCUMENT_ROOT'].$forPageTemp."/generForms.php");	
	break;
}
$db->stop();

include($_SERVER['DOCUMENT_ROOT']."/templates/footer.php");

