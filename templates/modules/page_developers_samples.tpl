<div id="content" class="site-content">		
	<div id="primary" class="content-area"> 
		<div class="content">
			<section class="text_block bg_gradient">
				<div class="container">
					<div class="row">
						<h1>{t('SITE_DEVELOPER_SAMPLES_HEAD',null,'en')}</h1>
						<small>{t('SITE_DEVELOPER_SAMPLES_SUBHEAD',null,'en')}</small>

						<h2>{t('SITE_MENU_SAMPLES',null,'en')}</h2>
						<p>{t('SITE_DEVELOPER_SAMPLES_BLOCK_SAMPLES_TEXT_1',null,'en')}:</p>
						<ul class="ul_marker">
							<li><p>PHP</p></li>
							<li><p>C# .NET (XP/Win7)</p></li>
							<li><p>C# .NET (Win8)</p></li>
							<li><p>Java</p></li>
							<li><p>Python</p></li>
							<li><p>Ruby</p></li>
							<li><p>Bash</p></li>
						</ul>			
						<p>{t('SITE_DEVELOPER_SAMPLES_BLOCK_SAMPLES_TEXT_2',null,'en')}.</p>
						<p>{t('SITE_DEVELOPER_SAMPLES_BLOCK_SAMPLES_TEXT_3', ['[a]' => '<a target="_blank" href="http://www.pamhelp.com/?/pamfax/Tickets/Submit">'],'en')}.</p>

						<h3>{t('SITE_DEVELOPER_SAMPLES_BLOCK_PHP_HEAD',null,'en')}</h3>
						<p>{t('SITE_DEVELOPER_SAMPLES_BLOCK_PHP_TEXT',null,'en')}</p>

						<p>{t('SITE_DEVELOPER_SAMPLES_BLOCK_PHP_TEXT_SAMPLE_1',null,'en')}</p>

						<script type="text/javascript">
							SyntaxHighlighter.all();
						</script>

						<pre class="brush: js;">
							/ include the PamFax API Client and set your credentials
							require_once('pamfax_api.php');
							$GLOBALS['PAMFAX_API_URL']         = "https://api.pamfax.biz/";
							$GLOBALS['PAMFAX_API_APPLICATION'] = "your API key here";
							$GLOBALS['PAMFAX_API_SECRET_WORD'] = "your API secret word here";
							// Tell the API Client to create objects from returned XML automatically
							$GLOBALS['PAMFAX_API_MODE']        = ApiClient::API_MODE_OBJECT;
							// Tell the API Client to use static wrapper classes
							pamfax_use_static();
				 
							// verify the PamFax User Name (this is the PamFax account used to also login at https://portal.pamfax.biz):
							$result = SessionApi::VerifyUser('test_user','test_users_password');
							if( ($result instanceof ApiError) // explicit error 
								|| !isset($result['UserToken']) || !isset($result['User']) ) // implicit error 
								die("Unable to login");
				 
							// Set the global usertoken
							$GLOBALS['PAMFAX_API_USERTOKEN'] = $result['UserToken']-&gt;token;
							// Optionally remember the user for later use
							$currentUser = $result['User'];
						</pre>

						<p>{t('SITE_DEVELOPER_SAMPLES_BLOCK_PHP_TEXT_SAMPLE_2',null,'en')}</p>
						<pre class="brush: js;">
							// do everything from sample 1
							require_once('sample_001.php');
				 
							// Create a new fax and give the users IP, UserAgent and an origin
							FaxJobApi::Create($_SERVER['REMOTE_ADDR'],$_SERVER['HTTP_USER_AGENT'],'API Samples');
							// Add a recipient to the fax (change sample fax number to a real one)
							FaxJobApi::AddRecipient('+15752087007','Optional name of recipient');
							// Set the cover to template 1 and the text to a random value
							FaxJobApi::SetCover(1,'This is my test fax using the PamFax API');
				 
							// Wait for the API to prepare the fax
							do
							{
								sleep(5);
								$test = FaxJobApi::GetFaxState();
								if( ($test instanceof ApiError) // explicit error 
									|| !isset($test['FaxContainer']) ) // implicit error 
									die("Error preparing the fax");
							}while( $test['FaxContainer']-&gt;state != "ready_to_send" );
				 
							// Send the fax
							FaxJobApi::Send();
						</pre>

						<p>{t('SITE_DEVELOPER_SAMPLES_BLOCK_PHP_TEXT_SAMPLE_3',null,'en')}</p>
						<pre class="brush: js;">
							require_once('sample_001.php');
							// Create a new fax and give the users IP, UserAgent and an origin
							FaxJobApi::Create($_SERVER['REMOTE_ADDR'],$_SERVER['HTTP_USER_AGENT'],'API Samples');
							// Add 3 recipients to the fax (change sample fax numbers to a real ones)
							FaxJobApi::AddRecipient('+15752088795','Recipient 1');
							FaxJobApi::AddRecipient('+493059878787','Recipient 2');
							FaxJobApi::AddRecipient('+313087989898','Recipient 3');
				 
							// Use the prefix '@' with the $full_path_to_local_file to tell the API Client it needs to upload a file
							$postdata = array(
								'file' =&gt; "@".$full_path_to_local_file,
								'filename' =&gt; $name_of_file
							);
							FaxJobApi::AddFile($postdata);
				 
							// Wait for the API to prepare the fax
							do
							{
								sleep(5);
								$test = FaxJobApi::GetFaxState();
								if( ($test instanceof ApiError) // explicit error 
									|| !isset($test['FaxContainer']) ) // implicit error 
									die("Error preparing the fax");
							}while( $test['FaxContainer']-&gt;state != "ready_to_send" );
				 
							// Send the fax
							FaxJobApi::Send();
						</pre>

						<h3>{t('SITE_DEVELOPER_SAMPLES_BLOCK_CSHARP_HEAD',null,'en')}</h3>
						<p>{t('SITE_DEVELOPER_SAMPLES_BLOCK_CSHARP_TEXT',null,'en')}</p>
						<pre class="brush: js;">
							//Call init to set the API key, secret and URL (they are all preset)
							ApiClient.Init(ApiKey, ApiSecret, ApiUrl);
							ApiResult verifyUserResult = null;
	 
							//loop until the user successfully logged in
							while (verifyUserResult == null || verifyUserResult.State == ApiResultState.Failure)
							{
								//Login PamFax user
								verifyUserResult = SessionApi.VerifyUser(Username, Password);
	 
								if (verifyUserResult.State == ApiResultState.Failure)
								{
									Console.WriteLine("Result: {0}", verifyUserResult.State.ToString());
									Console.WriteLine("Code: {0}", verifyUserResult.ErrorCode);
									Console.WriteLine("ErrorMessage: {0}", verifyUserResult.ErrorMessage);
									Console.WriteLine("Logging in failed, please retry, press any key to continue");
									Console.ReadLine();
									Console.Clear();
								}
							}
	 
	 
							//Retrieve the usertoken from the xml result using Indexers 
							string usertoken = verifyUserResult["UserToken", "token"];
	 
							//Or use the helper methods
							ApiResponse userTokenNode = verifyUserResult.Get("UserToken");
							usertoken = userTokenNode.Get("token", "");
	 
							//after retrieving the usertoken, don't forget to set it via: 
							ApiClient.SetApiUserToken(usertoken);
	 
							//Create a new fax
							//FaxJobApi.Create("127.0.0.1", "test_user_agent", "API Sample");
							ApiResult result = FaxJobApi.Create("127.0.0.1", "test_user_agent", "API Sample");
							if (result.State != ApiResultState.Success)
								return;
	 
							//Add fax recipient
							result = FaxJobApi.AddRecipient("+1 23 34567890", "Test");
							if (result.State != ApiResultState.Success)
								return;
	 
							//List all covers to retrieve the uuid used to set a cover via FaxJobApi.SetCover
							ApiResult listCoversResult = FaxJobApi.ListAvailableCovers(true);
	 
							//Get the list names "Covers"
							ApiList covers = listCoversResult.GetList("Covers");
	 
							string templateId = ""; 
							string templateUuid = "";
	 
							//Get the values needed to set the cover
							if (covers.Count > 0)
							{
								templateId = covers[0,"id"];
								templateUuid = covers[0 , "template_id"];
							}
	 
							//Set the cover
							FaxJobApi.SetCover(templateId, "Some sample cover text", templateUuid, null);
	 
							//Add a file to the fax
							string filePath = TestFile;
							FileInfo fi = new FileInfo(filePath);
							string fileName = fi.Name;
							string fileSizeInBytes = fi.Length.ToString();
	 
							byte[] pdfBytes = File.ReadAllBytes(filePath);
							string pdfBase64 = Convert.ToBase64String(pdfBytes);
	 
							//using (var md5 = MD5.Create())
							//{
							//    string contentMD5 = BitConverter.ToString(md5.ComputeHash(File.ReadAllBytes(filePath))).Replace("-", "");
							//    FaxJobApi.AddFile("9465544x.pdf", "API Sample", fileSizeInBytes, contentMD5, filePath);
							//}
	 
							FaxJobApi.AddFile(Path.GetFileName(fileName), filePath);
	 
							ApiResult faxStateResult = null;
	 
							do
							{
								faxStateResult = FaxJobApi.GetFaxState();
	 
								if ((faxStateResult != null) &#038;&#038;
										((faxStateResult.State == ApiResultState.Failure)
											|| (faxStateResult["FaxContainer", "state"] == "ready_to_send")
											|| (faxStateResult["FaxContainer", "state"] == "not_enough_credit")))
									break;
								else
									Thread.Sleep(3000);
							}
							while (true);
	 
							//send the fax
							ApiResult sendResult = FaxJobApi.Send("","");
						</pre>

						<h3>{t('SITE_DEVELOPER_SAMPLES_BLOCK_JAVA_HEAD',null,'en')}</h3>
						{t('SITE_DEVELOPER_SAMPLES_BLOCK_JAVA_TEXT_1',null,'en')}

						<pre class="brush: js;">
							 // Pre-define a request listener for post-request work
							 SessionListener requestListener = new SessionListener() {
									public void onRequestComplete( RequestType requestType, int resultCode, ResponseData responseData ) {
											// Checking for successful request result
											if ( resultCode == ResultCode.SUCCESS )
													...
											else
													...
											 // To do some additional things depending on request type
											switch ( requestType ) {
													case SESSION_VERIFY_USER:
															...
															UserInfo userInfo = responseData.getUserInfo();
															...
															break;
													default:
															break;
											}
									}
							 };
				 
							 // Verifying the user using static call
							 APISession.verifyUser( "userName", "password", requestListener );
						</pre>

						<p>{t('SITE_DEVELOPER_SAMPLES_BLOCK_JAVA_TEXT_2',null,'en')}:</p>
						<ul class="ul_marker">
							<li><p>{t('SITE_DEVELOPER_SAMPLES_BLOCK_JAVA_TEXT_2_TIP_1',null,'en')}</p></li>
							<li><p>{t('SITE_DEVELOPER_SAMPLES_BLOCK_JAVA_TEXT_2_TIP_2',null,'en')}</p></li>
						</ul>	

						<p>{t('SITE_DEVELOPER_SAMPLES_BLOCK_JAVA_TEXT_3',null,'en')}:</p>
						<pre class="brush: js;">
							// Pre-define a session listener for post-requests work
							 SessionListener sessionListener = new SessionListener() {
									public void onRequestComplete( RequestType requestType, int resultCode, ResponseData responseData ) {
											// Checking for successful request result
											if ( resultCode == ResultCode.SUCCESS )
													...
											else
													...
				 
											// To do some additional things depending on request type
											switch ( requestType ) {
													case FAXJOB_ADD_FILE:
															...
															FaxFileContainer fileContainer = responseData.getFaxFileContainer();
															...
															break;
													case FAXJOB_ADD_RECIPIENT:
															...
															FaxRecipient recipient = responseData.getFaxRecipient();
															...
															break;
													case FAXJOB_CREATE_FAX:
															...
															FaxContainer faxContainer = responseData.getFaxContainer();
															...
															break;
													case FAXJOB_SEND_FAX:
															...
															break;
													case SESSION_VERIFY_USER:
															...
															UserInfo userInfo = responseData.getUserInfo();
															...
															break;
													default:
															break;
											}
									}
							 };
				 
							 // Creating SessionHelper object to automate some API session work
							 SessionHelper sessionHelper = new SessionHelper( API_KEY, API_SECRET, sessionListener );
				 
							 // Starting API user session
							 sessionHelper.startSession( "userAccount", "userPassword", true );
				 
							 // Creating FaxJobHelper object to automate some fax job tasks
							 FaxJobHelper faxJobHelper = new FaxJobHelper( sessionListener, SEND_REPEAT_TIMEOUT, SEND_REPEATS_COUNT );
				 
							 // Creating new fax container
							 faxJobHelper.createFax();
				 
							 // Adding fax recipient
							 faxJobHelper.addRecipient( "+1991234567", "John Doe" );
				 
							 // Adding file which one of supported formats
							 File faxFile = new File( "path/to/my/file.docx" );
							 faxJobHelper.addFile( "myFileToFax.docx", faxFile );
				 
							 // Sending fax. If fax yet not ready, FaxJobHelper will retry sending
							 // with specified SEND_REPEAT_TIMEOUT and SEND_REPEATS_COUNT
							 faxJobHelper.sendFax();
						</pre>

						<h3>{t('SITE_DEVELOPER_SAMPLES_BLOCK_PYTON_HEAD',null,'en')}</h3>
						{t('SITE_DEVELOPER_SAMPLES_BLOCK_PYTON_TEXT', ['[a]' => '<a target="_blank" href="http://github.com/dynaptico/pamfaxp">'],'en')}

						<pre class="brush: js;">
							#!/usr/bin/env python
				 
							import time
							from pamfax import PamFax
				 
							HOST = 'api.pamfax.biz'
							USERNAME = 'your PamFax User Name here'
							PASSWORD = 'your PamFax password here'
							APIKEY = 'your API key here'
							APISECRET = 'your API secret word here'
				 
							pamfax = PamFax(USERNAME, PASSWORD, host=HOST, apikey=APIKEY, apisecret=APISECRET)
							pamfax.create()
							response = pamfax.list_available_covers()
							pamfax.set_cover(response['Covers']['content'][1]['id'], 'My test fax with PamFax using Python')
							pamfax.add_recipient('+15752088795')
							while True:
							 fax_state = pamfax.get_state()
							 if fax_state['FaxContainer']['state'] == 'ready_to_send':
							  break
							 time.sleep(2)
				 
							pamfax.send()
						</pre>
			
						<h3>{t('SITE_DEVELOPER_SAMPLES_BLOCK_RUBY_HEAD',null,'en')}</h3>
						{t('SITE_DEVELOPER_SAMPLES_BLOCK_RUBY_TEXT', ['[a:lib]' => '<a target="_blank" href="https://github.com/tropo/pamfaxr">', '[a:tropo]' => '<a target="_blank" href="http://www.tropo.com">'],'en')}

{literal}			
						<pre class="brush: js;">
							require 'rubygems'
							require 'lib/pamfaxr'
							require 'awesome_print'
				 
							PAMFAX_URI = 'https://api.pamfax.biz/'
							PAMFAX_USERNAME = 'your PamFax User Name here'
							PAMFAX_PASSWORD = 'your PamFax password here'
				 
							# You may also specify a custom :api_key and :api_secret, or it uses the default
							pamfaxr = PamFaxr.new :base_uri =&gt; PAMFAX_URI,
												  :username =&gt; PAMFAX_USERNAME,
												  :password =&gt; PAMFAX_PASSWORD
				 
							# Create a faxjob
							faxjob = pamfaxr.create_fax_job
							ap 'Creating a fax job'
							ap '*'*10
							ap faxjob
				 
							# Add a cover
							covers = pamfaxr.list_available_covers
							ap 'Listing available covers'
							ap '*'*10
							ap covers
							ap 'Adding a cover'
							ap '*'*10
							ap pamfaxr.set_cover(covers['Covers']['content'][1]['id'], 'Foobar is here!')
				 
							ap 'Adding a remote file'
							ap '*'*10
							ap pamfaxr.add_remote_file('***place a HTTP address here to a document***')
				 
							ap 'Adding a local file'
							ap '*'*10
							file = pamfaxr.add_file('examples/Tropo.pdf')
							ap file
				 
							ap 'Removing a file'
							ap '*'*10
							ap pamfaxr.remove_file(file['FaxContainerFile']['file_uuid'])
				 
							ap 'Adding a recipient'
							ap '*'*10
							ap pamfaxr.add_recipient('+15752088972')
				 
							ap 'Adding a second recipient'
							ap '*'*10
							recipient = pamfaxr.add_recipient('+493089766442')
							ap recipient
				 
							ap 'Removing a recipient'
							ap '*'*10
							ap pamfaxr.remove_recipient(recipient['FaxRecipient']['number'])
				 
							ap 'Listing a recipient'
							ap '*'*10
							ap pamfaxr.list_recipients
				 
							ap 'Listing associated fax files'
							ap '*'*10
							ap pamfaxr.list_fax_files
				 
							ap 'Checking state'
							ap '*'*10
							time = 0
							loop do
							  fax_state = pamfaxr.get_state
							  ap fax_state
							  converting = true
							  break if fax_state['FaxContainer']['state'] == 'ready_to_send'
							  sleep 2
							  time += 2
							  ap "#{time.to_s} seconds elapsed..."
							end
				 
							ap 'Preview the fax'
							ap '*'*10
							ap pamfaxr.get_preview(faxjob['FaxContainer']['uuid'])
				 
							ap 'Send the fax'
							ap '*'*10
							ap pamfaxr.send_fax
				 
							ap 'Send the fax later'
							ap '*'*10
							ap pamfaxr.send_fax_later
				 
							ap 'Clone the fax'
							ap '*'*10
							ap pamfaxr.clone_fax(faxjob['FaxContainer']['uuid'])
						</pre>
{/literal}			
						<h3>{t('SITE_DEVELOPER_SAMPLES_BLOCK_BASH_HEAD',null,'en')}</h3>
						{t('SITE_DEVELOPER_SAMPLES_BLOCK_BASH_TEXT',null,'en')}

						<pre class="brush: js;">
							#!/bin/bash
							# Send a fax using bash, curl, sed and the PamFax API
				 
							# Check the number of arguments
							if [ $# -ne 7 ]
							then
								echo "USAGE: $0 apikey apisecret username password faxnumber faxcontent filename"
								exit 1
							fi
				 
							# Protocol and server
							export url_start="https://api.pamfax.biz/"
				 
							# Common parameters used in all API calls, taken from commandline
							export url_params="/?apikey=$1&amp;apisecret=$2"
				 
							# Create a session
							export xml_result=`curl -k --silent "$url_start/Session/VerifyUser$url_params&amp;username=$3&amp;password=$4"`
				 
							# Todo: error handling / check for success
				 
							# Extract the user token from the XML response
							export usertoken=`echo $xml_result | sed '/UserToken/!d;s/.*token="\([^"]*\)".*/\1/'`
				 
							if [ "$usertoken" == "" ]
							then
								echo "Session/VerifyUser failed"
								exit 1
							fi
				 
							# Add usertoken to common url parameters for this session
							export session_params="$url_params&amp;usertoken=$usertoken"
				 
							# Create a new fax job
							export user_ip=`hostname -i`
							export xml_result=`curl -k --silent "$url_start/FaxJob/Create$session_params&amp;user_ip=$user_ip&amp;user_agent=pamfax_send.sh&amp;origin=shell"`
				 
							# Todo: error handling / check for success
				 
							# Add the recipient
							export xml_result=`curl -k --silent "$url_start/FaxJob/AddRecipient$session_params&amp;number=$5"`
				 
							# Todo: error handling / check for success
				 
							# Use Basic template for the cover page
							# Available templates can be listed using FaxJob/ListAvailableCovers
							export template_id=1
				 
							# Add the cover page using the text provided on the command line
							export xml_result=`curl -k --silent "$url_start/FaxJob/SetCover$session_params&amp;template_id=$template_id&amp;text=$6"`
				 
							# Todo: error handling / check for success
				 
							# Upload the given file
							export xml_result=`curl -k --silent --form file=@$7 --form filename=$7 "$url_start/FaxJob/AddFile$session_params"`
				 
							# Loop until the fax is ready
							export ready=1
							while [ $ready -ne 0 ]
							do
								# Wait for 5 seconds
								sleep 5
								# Query the fax state
								export xml_result=`curl -k --silent "$url_start/FaxJob/GetFaxState$session_params"`
								# Note that the response will also contain pricing information
								# Look for state="ready_to_send"
								echo $xml_result | grep 'state="ready_to_send"'
								export ready="$?"
							done
				 
							#Send the fax
							export xml_result=`curl -k --silent "$url_start/FaxJob/Send$session_params"`
							echo $xml_result
						</pre>

						<br /><div class="text-center big_text">{t('SITE_DEVELOPER_SAMPLES_FOOTER',null,'en')}</div>
			
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 container_main_btn">
							<a href="{$action_developers_signup}" class="main_btn">{t('SITE_BTN_SIGNUP_NOW',null,'en')}</a>
						</div>
					</div>
				</div>
			</section>												
		</div>
	</div>
</div> <!-- #content -->