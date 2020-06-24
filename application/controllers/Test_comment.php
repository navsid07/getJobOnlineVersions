<?php
class Test_comment extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('testcomment_model');
        $this->load->model('testcomment1_model');
         $this->load->model('testt');
        $this->load->model('testt');
        $this->load->library('form_validation');
        $this->load->helper('url');


    }

public function tinymcetest()
    {
        $this->load->view('tinymcetest');
    }
    public function fetchmails()
    {
        $result=$this->testt->fetchEmails();
        foreach ($result as $keyValue) {
            echo $keyValue['col3'].'</br>';
        }
   
    }

public function insertdata()
  {
    $data=",
    rajeshadv2007@gmail.com,
rtch1@rediffmail.com,
HPS63@REDIFFMAIL.COM,
amiti190288@gmail.com,
ramansingh1222@yahoo.in,
khalsamalkeet92@yahoo.com,
anshutalwar81@yahoo.com,
manbir08@gmail.com,
manbir08@gmail.com,
jaswindersingh00@yahoo.co.in,
sunilbhangala123@gmail.com,
singhsohan721@gmail.com,
shivsagar6728@gmail.com,
rahulsingla0205@gmail.com,
aroras_abhi@yahoo.co.in,
dangrasuresh44@gmail.com,
namahshivya@gmail.com,
aroranilanchal@yahoo.com,
paulus.masih2@gmail.com,
coolchampabhi1@gmail.com,
gauravsharmaibm@yahoo.com,
gmc_37chd@rediffmail.com,
gs00087@gmail.com,
manojsolan2003@yahoo.com,
sbss0612@yahoo.in,
moolraj1977s@gmail.com,
chander_h@yahoo.com,
diwan1971@gmail.com,
amitkamal_nirvana@hotmail.com,
dranildev@gmail.com,
pradeep.antal@gmail.com,
subhashkishore@yahoo.com,
52mailbalvinder52@gmail.com,
shrishti.enterprises1974@gmail.com,
saratachandrasahoo@yahoo.com,
217manjeet@gmail.com,
harpinder4all@gmail.com,
ramansharma_786@live.com,
rameshjc300242@gmail.com,
biswajit6689@gmail.com,
mansoorahmad712@gmail.com,
kumargaurav.in@gmail.com,
arunkptarun@yahoo.co.in,
y_kumar@hdfclife.com,
verma.chamanlal@yahoo.in,
mohitmehral@gmail.com,
parveenkumar587@yahoo.in,
sandeeppathania88@gmail.com,
vinodchd44@gmail.com,
BALWANT623@GMAIL.COM,
krishankantnangia@yahoo.com,
syndicatetex80@yahoo.com,
manoj.legal@gmail.com,
1961pritpal@gmail.com,
1946grc@gmail.com,
shinebiotech@yahoo.co.in,
swaruppunya@gmail.com,
nikhilnadda1988@gmail.com,
sandeepbiradar976@gmail.com,
triptabali14@gmail.com,
prasad_pulavarti@yahoo.co.in,
vikramaroraldh@gmail.com,
sandeep8146146670@gmail.com,
dineshsinghchuhan985@gmail.com,
rishav303@yahoo.com,
ravindra.dhaila@gmail.com,
pawanverma3907@gmail.com,
sadulovely@yahoo.in,
ashokyadav1006@gmail.com,
rajveer2rajput@gmail.com,
parveen.rewal@gmail.com,
arvind.kashiv9@gmail.com,
laxmi.vishwa@rediffmail.com,
naresh.rana818@gmail.com,
karun.khurana1@gmail.com,
adv_seemabatra@rediffmail.com,
er.rafq@yahoo.in,
bkg6561@gmail.com,
jaggidudesingh@gmail.com,
mohan.indus1987@gmail.com,
baghal.narender@gmail.com,
coolanita.1947@gmail.com,
amarahdan@gmail.com,
kshitizgautam@outlook.com,
1989syadav@gmail.com,
pstk99@gmail.com,
singhinderjit2587@yahoo.co.in,
1983pardeepkaur@gmail.com,
20shivanijain@gmail.com,
rajendrak284@gmail.com,
srp93@yahoo.com,
karkiamol@yahoo.in,
ravindar388@gmail.com,
rajender.kumar65mm@gmail.com,
2410mh@gmail.com,
gagangl36@gmail.com,
pardeeppbobal@gmail.com,
karmvirsinghatkan@gmail.com,
vishal_tgtsci@rediffmail.com,
sandeepsingla2300@gmail.com,
xsks@rediffmail.com,
kamitsingh1983@gmail.com,
Mohit.sachdev@infotelconnect.com,
tojatinderpal@gmail.com,
arvinderuppal111@gmail.com,
ankitgoswami2ndmarch2@gmail.com,
vikashkumr0078@gmail.com,
ajeetishere@yahoo.co.uk,
ns.malhan@yahoo.in,
ranakuldeep@yahoo.co.in,
kaundal80@gmail.com,
munishkumarch@yahoo.com,
opamita@gmail.com,
sabharwalbholath@gmail.com,
pushkarsinghdhami@gmail.com,
fayazahmad.v@gmail.com,
sanjiv.4192405w@gmail.com,
geniusrudraksh@gmail.com,
chiragpatel1975@gmail.com,
naveen200682@gmail.com,
prasad20083130@gmail.com,
vikram23378@gmail.com,
hksinghal12@gmail.com,
hksinghal12@gmail.com,
a.agnihotri003@gmail.com,
davinder.kumar43@yahoo.com,
kannan_prajesh@yahoo.com,
karambirbaloda@gmail.com,
jaralarshad@rediffmail.com,
dbgarg29@rediffmail.com,
koundal.narens11@rediffmail.com,
vijay_bro@rediffmail.com,
sanjeev15277@gmail.com,
gfx3070@gmail.com,
010686nk@gmail.com,
khushwant.nitj@gmail.com,
sharma986dheeraj@gmail.com,
basantsjyoti@gmail.com,
avijitraj@yahoo.com,
anverismail@gmail.com,
sandeep_minhas01@yahoo.co.in,
parvinder354@live.com,
deepakshivsewak@yahoo.co.in,
avninder.singh@yahoo.com,
sharma_d@yahoo.com,
hssaini82@gmail.com,
saurabhdec19@gmail.com,
zattrandhawa@rediffmail.com,
santoshright009@gmail.com,
rkgarg@glide.net.in,
vmittal99@gmail.com,
awasthi.vicky1@gmail.com,
1961rakeshgupta@gmail.com,
salgotra42@yahoo.in,
1960aparnagupta@gmail.com,
rajinderk555@gmail.com,
anildhiman273@gmail.com,
ashoksahni55@gmail.com,
gazal.bu@rediffmail.com,
cuttam11@yahoo.com,
thakurvinod85@yahoo.com,
balwantnavy@gmail.com,
anks4every1@gmail.com,
bhuveshgoyal@gmail.com,
bholafzr@gmail.com,
diggi_22@yahoo.com,
manoj_mishra79@rediffmail.com,
hsbkg.58@gmail.com,
bali_biochem2005@yahoo.com,
malikmj365@gmail.com,
rajender001k@gmail.com,
rahul15983@gmail.com,
shyamald1381@gmail.com,
shridharverma@hotmail.com,
dudi2632@gmail.com,
ravinirban83@gmail.com,
findinder.mattoo@gmail.com,
bakhsh.sameer@gmail.com,
raviwadehra_ambala@yahoo.co.in,
jatinderpalsinghtung@rediffmail.com,
nagpalsan@yahoo.com,
sharmaphotostudio@rediffmail.com,
vinitpuniya6574@gmail.com,
hemant250790@gmail.com,
1990.monu.aryans@gmail.com,
jayantnanda@yahoo.com,
lovepreetp@ymail.com,
omprashar2811@gmail.com,
negi261181@gmail.com,
ashu0830@gmail.com,
rajkumarcobs@yahoo.co.in,
gurshaan2008@gmail.com,
pannalalkumar@yahoo.in,
sekhon_raghbir@yahoo.com,
anil_rakeshi@yahoo.co.in,
jatinder_sidhu1086@yahoo.com,
dhillonsonu73@gmail.com,
vedwadeepak@gmail.com,
coolshambu.fo@gmail.com,
indrajitmandal87@gmail.com,
ajayalphabu@gmail.com,
mauryaramdev@yahoo.com,
rgautam57@gmail.com,
abhishek.majumdar03@gmail.com,
baljit.kaler@hotmail.com,
ashish1432datta@gmail.com,
rai.rk.ambala@gmail.com,
rsmahiwal@live.com,
raman.297@rediffmail.com,
ankush_223523@rediffmail.com,
monu.bobby2003@YAHOO.COM,
skmahajan74@yahoo.com,
thindgurminder_s@hotmail.com,
ujjwal.bansal03@gmail.com,
falconbiotech@hotmail.com,
harishsharma086@yahoo.com,
gurvindersin138@gmail.com,
skdk2007@gmail.com,
davisoni22@gmail.com,
rimanshu@yahoo.co.in,
r.rohitrajat@gmail.com,
mohindru110@hotmail.com,
pksharma0002@yahoo.co.in,
anku.raizada@yahoo.com,
casonovaayush@gmail.com,
NIHAR3459@YAHOO.IN,
vijay240448@gmail.com,
sspunia1984@gmail.com,
vinitpuniya6574@gmail.com,
hemant250790@gmail.com,
1990.monu.aryans@gmail.com,
jayantnanda@yahoo.com,
lovepreetp@ymail.com,
omprashar2811@gmail.com,
negi261181@gmail.com,
ashu0830@gmail.com,
rajkumarcobs@yahoo.co.in,
gurshaan2008@gmail.com,
pannalalkumar@yahoo.in,
sekhon_raghbir@yahoo.com,
anil_rakeshi@yahoo.co.in,
jatinder_sidhu1086@yahoo.com,
dhillonsonu73@gmail.com,
vedwadeepak@gmail.com,
coolshambu.fo@gmail.com,
indrajitmandal87@gmail.com,
ajayalphabu@gmail.com,
mauryaramdev@yahoo.com,
rgautam57@gmail.com,
abhishek.majumdar03@gmail.com,
baljit.kaler@hotmail.com,
ashish1432datta@gmail.com,
rai.rk.ambala@gmail.com,
rsmahiwal@live.com,
raman.297@rediffmail.com,
ankush_223523@rediffmail.com,
monu.bobby2003@YAHOO.COM,
skmahajan74@yahoo.com,
thindgurminder_s@hotmail.com,
ujjwal.bansal03@gmail.com,
falconbiotech@hotmail.com,
harishsharma086@yahoo.com,
gurvindersin138@gmail.com,
skdk2007@gmail.com,
davisoni22@gmail.com,
rimanshu@yahoo.co.in,
r.rohitrajat@gmail.com,
mohindru110@hotmail.com,
pksharma0002@yahoo.co.in,
anku.raizada@yahoo.com,
casonovaayush@gmail.com,
NIHAR3459@YAHOO.IN,
vijay240448@gmail.com,
sspunia1984@gmail.com,
sskohliassociates@gmail.com,
tribhuwansbi@gmail.com,
prasenjeet.ds@outlook.com,
chamani2013@gmail.com,
manjeet.rajneet@gmail.com,
dkc10180@gmail.com,
uditdatyal@gmail.com,
rajeevsharmahuf@gmail.com,
rksandle7@gmail.com,
nkcompany7@gmail.com,
kbrijesh94@yahoo.com,
asbhangu37@gmail.com,
varinderpal9356716419@gmail.com,
sandhir.sushil@gmail.com,
sudeshhp41@yahoo.com,
ajay.pandita@rediffmail.com,
sskohliassociates@gmail.com,
littlecherubsranjan@gmail.com,
guptaanup96@gmail.com,
rakesh.singh1548@gmail.com,
sumitthakursol@gmail.com,
gaurav_josh30@yahoo.co.in,
jas.smarty@yahoo.co.in,
sehgal1965@hotmail.com,
amarindersidhu07@gmail.com,
neeraj_paul@rediffmail.com,
tkaggarwal@hotmail.com,
mr_sanjiv@yahoo.com,
thakurrajender28@gmail.com,
spsingh567@gmail.com,
dharampalgoel60@gmail.com,
parveengupta701@gmail.com,
bhagatlb@yahoo.in,
bhumikumarreddy@gmail.com,
ramchandraverma123@gmail.com,
vjkmr.1696@gmail.com,
pramod1526@gmail.com,
prakash100277@gmail.com,
vsoni17@yahoo.co.in,
rs.chd56@gmail.com,
anilsjgref@gmail.com,
ramnarayan898@gmail.com,
amitg2203@gmail.com,
baljitjohal20@yahoo.in,
debashiskoley@yahoo.co.in,
dps.1976@gmail.com,
maheepal1985@gmail.com,
prashantsdd@gmail.com,
vishalsingla76@hotmail.com,
kaurbalwinder_3011@hotmail.com,
HARPALKALRA400@YAHOO.COM,
abhishekguleria53@gmail.com,
meenakumari964@gmail.com,
vicky92kapoor@gmail.com,
madanlalc7@gmail.com,
singhsukhjit80@gmail.com,
makkarpco_kkp@rediffmail.com,
aariffaridi2012@gmail.com,
sajadhussain93@yahoo.com,
gursewakw22@gmail.com,
neeraj_paulchd@yahoo.co.in,
neeraj_paulchd@yahoo.co.in,
anamikas1015@gmail.com,
viveksvkumar@gmail.com,
mittal.sandeep12@gmail.com,
tomarsagarsingh@gmail.com,
dwkr71@rediffmail.com,
daljit.bajwa@rediffmail.com,
tarun_13kumar@yahoo.com,
pawanfsi124@gmail.com,
viraj_kamath@yahoo.com,
kanda_nakodar01@rediffmail.com,
shiv.86cs@rediffmail.com,
gpinsan@gmail.com,
hotsameer977@gmail.com,
RATISH2013@GMAIL.COM,
ASHISH.MCHAUHAN86@GMAIL.COM,
JAI.CHINU@GMAIL.COM,
surveshkumarsingh@gmail.com,
achaljain05@gmail.com,
sdaljit66@yahoo.co.in,
mj.maliha_mahraj@rediffmail.com,
ANILRCC1980@GMAIL.COM,
anilad9@gmail.com,
seemavikas@rediffmail.com,
passi.tarun@yahoo.com,
gill.rana46@yahoo.com,
DHARM1048@REDIFFMAIL.COM,
NEERAJMAUDGILL@GMAIL.COM,
kang7900@gmail.com,
sikkaarun63@yahoo.com,
praveenthakur1302@gmail.com,
CGOYAL21@GMAIL.COM,
ravitach@yahoo.com,
radhkam@ymail.com,
AASTHA.857@REDIFFMAIL.COM,
arun.guptas87@gmail.com,
om.parkash042@yahoo.com,
kshemendersapahia@gmail.com,
baljeet.kirat@gmail.com,
LAKHA03@REDIFFMAIL.COM,
nitin.manohar27@gmail.com,
ranjanswarup@gmail.com,
lalchandbhareri@gmail.com,
harish_29_01@yahoo.co.in,
shaktimananjan@yahoo.com,
atindersinghbrar@gmail.com,
ANKITKALRA743@GMAIL.COM,
MUKESH.MECH123@GMAIL.COM,
vijaymehra74@gmail.com,
kumarsharma_86@yahoo.co.in,
RAHULBANSAL7@GMAIL.COM,
er.ankushdhiman@gmail.com,
heman29081989@gmail.com,
spsinghjbd@gmail.com,
karm15aug@gmail.com,
nirmal33799@gmail.com,
pammi366@yahoo.com,
arvindjyani6491@gmail.com,
bhupi.ash@gmail.com,
surender_skthakur@rediffmail.com,
rajkishor.rana@gmail.com,
gov_sharma2@hotmail.com,
ashish1970@gmail.com,
manjitsinghgoraya@rocketmail.com,
baljitchowdharyrathrian@gmail.com,
pawan_1982ldh@yahoo.com,
vikrammotiyan@gmail.com,
dhanwant.singh7@gmail.com,
akhleshbayal@gmail.com,
arjitsachdeva94@gmail.com,
manucool.pal@gmail.com,
anilbhill27@gmail.com,
aswbharat@gmail.com,
riya_d3103@yahoo.com,
pk00673@gmail.com,
vk52386@gmail.com,
harry.businesspoint@gmail.com,
lalbabu716@gmail.com,
sudhirgupta1805@gmail.com,
navjot.majhi@yahoo.com,
mewa.shyan@gmail.com,
pslathia33@gmail.com,
taran_saini87@yahoo.com,
rajpawan@rediffmail.com,
malkitthind20@gmail.com,
pardeeprajput49@gmail.com,
vktiwari123@rediffmail.com,
tarlochansingh33@yahoo.com,
spdhingra_fca@hotmail.com,
dkmalhotraz@yahoo.com,
satwinder.hunjan2004@gmail.com,
pandey_kn@yahoo.co.in,
shukla.madhurajesh@gmail.com,
sewammmindia2012@gmail.com,
kul333@rediffmail.com,
digi0008@hotmail.com,
chamanthakur10@gmail.com,
sachidanand.nayak@rediffmail.com,
abhishek.aaddi@gmail.com,
bhattbanshi@gmail.com,
rathorems208@gmail.com,
sahil.sareen15@gmail.com,
dharambir2007@yahoo.co.in,
nkyadav1611@gmail.com,
gurjeevan41@yahoo.com,
sanjaygoad@yahoo.com,
rohitgoyal.kumar4@gmail.com,
ghotra1955@gmail.com,
mukeshdas33@gmail.com,
balbir2047@yahoo.com,
januanand@ymail.com,
rajeshjindal2010@gmail.com,
subhash655@gmail.com,
cnaresh04@gmail.com,
sneelo.ilu1@gmail.com,
rajputsonu48@gmail.com,
dbg.shrawan@gmail.com,
ashishdhyani1984@yahoo.co.in,
preet101280@yahoo.in,
tarsemsingh.crpf01@gmail.com,
vijaykumar98156@yahoo.in,
sanafics88@yahoo.co.in,
arunat.kumar54@gmail.com,
mkmiran36@gmail.com,
kaurgurmeet678@gmail.com,
gagandeepsinghvirk860@gmail.com,
shaminder.singh001@gmail.com,
abhay.sood87@gmail.com,
sankhanna@gmail.com,
anirudhccna@gmail.com,
rkss478@gmail.com,
rahulsharma9258@yahoo.com,
satish_pathak123@rediffmail.com,
shashi.bhusri@gmail.com,
sunil76sharma@gmail.com,
rjatana64@yahoo.com,
dilipmishra776@gmail.com,
piare30@yahoo.co.in,
krajaymar_1979@yahoo.co.in,
deepanpahwa91@gmail.com,
harsh_preens04@hotmail.com,
shiv71bhatti@gmail.com,
navkarangill@gmail.com,
sangwan.raj@gmail.com,
dabrasanjay0@gmail.com
";
    $phone=explode(',',$data);
    foreach ($phone as $value) {
      

$array = array(
        'email' => $value,
        'status' => 'new'
        );

  if($this->testt->insert($array))
  {
    echo 'success';
  }
  }
}

    // this function to handle getting all news
    function index()
    {
?>


<script type="text/javascript">
var jvalue = 'this is javascript value';

<?php  $abc = "<script>document.write(jvalue)</script>"; ?>
</script>
<?php
 echo  'php_'.$abc;


        /*$milliseconds='11-12-2018';
         echo $date2=  strtotime($milliseconds) * 1000;*/
      

       // $data['news'] = $this->testcomment_model->get_all();
       // $this->load->view('commentnews_view', $data);
    }

    /* this function to handle getting
      news details and its comments based on news id  */

    function show_one($ne_id)
    {
        // get a post news based on news id
        $data['news'] = $this->testcomment_model->get_one($ne_id);
        // get a post COMMENTS based on news id and send it to view
        $data['comments'] = $this->show_tree($ne_id);
        $this->view('testcomment_view', $data);
    }
    // this function to handle add comments form on the news
    function add_comment($ne_id)
    {

        // get a post id based on news id
        $data['news'] = $this->testcomment_model->get_one($ne_id);

        //set validation rules
        $this->form_validation->set_rules('comment_name', 'Name', 'required|trim|htmlspecialchars');
        $this->form_validation->set_rules('comment_email', 'Email', 'required|valid_email|trim|htmlspecialchars');
        $this->form_validation->set_rules('comment_body', 'comment_body', 'required|trim|htmlspecialchars');
        if ($this->form_validation->run() == FALSE) {
            // if not valid load comments
            $this->session->set_flashdata('error_msg', validation_errors());
            redirect("test_comment/show_one/$ne_id");
        } else {
            //if valid send comment to admin to tak approve
            $this->testcomment1_model->add_new_comment();
            $this->session->set_flashdata('error_msg', 'Your comment is awaiting moderation.');
            redirect("test_comment/show_one/$ne_id");
        }
    }

    function show_tree($ne_id)
    {
        // create array to store all comments ids
        $store_all_id = array();
        // get all parent comments ids by using news id
        $id_result = $this->testcomment1_model->tree_all($ne_id);
        // loop through all comments to save parent ids $store_all_id array
        foreach ($id_result as $comment_id) {
            array_push($store_all_id, $comment_id['parent_id']);
        }
        // return all hierarchical tree data from in_parent by sending
        //  initiate parameters 0 is the main parent,news id, all parent ids

        return  $this->in_parent(0,$ne_id, $store_all_id);
    }


    /* recursive function to loop
       through all comments and retrieve it
    */
    function in_parent($in_parent,$ne_id,$store_all_id) {
        // this variable to save all concatenated html
        $html = "";
        // build hierarchy  html structure based on ul li (parent-child) nodes
        if (in_array($in_parent,$store_all_id)) {
            $result = $this->comment_model->tree_by_parent($ne_id,$in_parent);
            $html .=  $in_parent == 0 ? "<ul class='tree'>" : "<ul>";
            foreach ($result as $re) {
                $html .= " <li class='comment_box'>
            <div class='aut'>".$re['comment_name']."</div>
            <div class='aut'>".$re['comment_email']."</div>
            <div class='comment-body'>".$re['comment_body']."</div>
            <div class='timestamp'>".date("F j, Y", $re['comment_created'])."</div>
            <a  href='#comment_form' class='reply' id='" . $re['comment_id'] . "'>Replay </a>";
                $html .=$this->in_parent($re['comment_id'],$ne_id, $store_all_id);
                $html .= "</li>";
            }
            $html .=  "</ul>";
        }

        return $html;
    }



}
?>