<h1>Reverse DNS update</h1>
Enter IP and this will automatically change to what you need to type:<br>
<input name="name" type="text"><br>
<button onclick="myFunction()">Enter</button></br>
This will use IP <span name="ip">74.84.107.49</span> as the example
<ol>
  <li>Make sure request is for a fully qualified domain name</li>
    <i>Ex. mail.domain.com, domain.net</i>
  <li>Open a terminal</li>
  <li>ssh sysadmin@njtobndv01.mcomdc.com</li>
    <i>Password can be found in password list on sharepoint</i>
  <li>su -</li>
  <li>bash</li>
  <li>cd /etc/namedb/master</li>
  <li>Locate file to modify.</li>
    <i>Ex. For <span name="ip">74.84.107.49</span> you would open <span name="conversion">107.84.74.</span>in-addr.arpa (notice the ip is in reverse order)</i>
  <li>Before any changes are made make a copy of the file adding the current date to the end (YYYMMDD)</li>
    <i>Ex. cp -p <span name="conversion">107.84.74.</span>in-addr.arpa <span name="conversion">107.84.74.</span>in-addr.arpa.<span name="date">20140412</span> </i>
  <li>Open file for editing</li>
    <i>vi <span name="conversion">107.84.74.</span>in-addr.arpa</i>
  <li>One in the editor modify the date at the top of the file to the current date and put a 01 behind it (YYYYMMDD01)</li>
  <li>Change the name to your name (First letter of first name, last name)</li>
    <i>Ex. <span name="date">20150910</span>01	;Last modified by cfedson</i>
  <li>Scroll down and locate the reverse IP <span name="reversed">49.107.84.74</span> in the document. It will look like</li>
    <span name="reversed">49.107.84.74</span>-<span name="reversed">49.107.84.74</span>.in-addr.arpa	IN PTR <span name="dash_address">74-84-107-49</span>.client.mchsi.com.
  <li>Copy the qualified domain from the ticket and paste it in for the last section of that line</li>
    Original Line:<br/>
    <span name="reversed">49.107.84.74</span>-<span name="reversed">49.107.84.74</span>.in-addr.arpa      IN PTR <span name="dash_address">74-84-107-49</span>.client.mchsi.com.<br/>
    New Line:</br>
    <span name="reversed">49.107.84.74</span>-<span name="reversed">49.107.84.74</span>.in-addr.arpa      IN PTR mail.domain.com.</br>
  <li>Verify this line is correct and has a . at the end of the line</li>
  <li>Verify you have changed the date and put your name in</li>
  <li>If everything is correct hit ESC to leave INSERT mode, then type :wq! save file and exit</li>
</ol>
  <h2>Reloading the zone</h2>
<ol>
  <li>CD back to root: cd/</li>
  <li>cd /usr/local/sbin</li>
  <li>At the prompt type: rndc reload <span name="conversion">107.84.74.</span>in-addr.arpa</li>
    <i>make sure to change the filename to the file you modified</li>
  <li>If successful it will come back with: Zone reload queued</li>
</ol>
<h2>Verify the change was made</h2>
<ol>
  <li>at the prompt type: dig +short -x <span name="ip">74.84.107.49</span></li>
    Make sure you are using the address you were given to change
  <li>If successful reply should be: mail.domain.com</li>
    Reply will be the domain you entered
  <li>If you do not get an answer try: dig +short -x <span name="ip">74.84.107.49</span> @localhost</li>
  <li>Copy this information to put back in the notes of the ticket</li>
</ol>
<h2>Resolving the ticket</h2>
<ol>
  <li>Open the INC ticket and click create</li>
    <img src="./pics/ticket.png">
  <li>A popup will appear. Inside the popup fill in the following</li>
    <ol type="a">
      <li>Work info type: select 'Resolution Communications'</li>
      <li>Source: Select 'Other'</li>
      <li>Summary: Enter DNS Request Completed</li>
      <li>Notes: Enter the dig information you gatherd in the prvious section</li>
      <li>Click Save</li>
    </ol>
    <img src="./pics/inc_notes.png">
  <li>Fill in the information for the ticket</li>
    <ol type="a">
      <li>State: Change to Closed</li>
      <li>Assignee: Verify it is assigned to you</li>
      <li>Resolution: DNS Completed. Also paste the dig information gathered previously</li>
      <li>Click Save and close ticket out</li>
    </ol>
  </ol>
  <img src="./pics/final_notes.png">
<br/>
This completes Reverse DNS update



<script>
function myFunction() {
  var word = document.getElementsByName("name")[0].value;
  RegE = /^\d{1,3}.\d{1,3}.\d{1,3}.\d{1,3}$/
  if(word.match(RegE)){
    //alert("valid");
    res = word.split(".");
    convert = res[2]+"."+res[1]+"."+res[0]+".";
    backward = res[3]+"."+res[2]+"."+res[1]+"."+res[0];
    dasher = res[3]+"-"+res[2]+"-"+res[1]+"-"+res[0];
    var w = document.getElementsByName("dash_address");
    var x = document.getElementsByName("conversion");
    var y = document.getElementsByName("ip");
    var z = document.getElementsByName("reversed");
    var date = new Date();
    var day = date.getDate();
    var month = (date.getMonth()+1);
    var year = date.getFullYear();
    if (month < 10) month = '0' + month;
    if (day < 10) day = '0' + day;
    var date_entry = year+""+month+""+day;
    for (i = 0; i < w.length; i++) {
      document.getElementsByName("date")[i].innerHTML = date_entry;
    }
    var i;
    for (i = 0; i < w.length; i++) {
      document.getElementsByName("dash_address")[i].innerHTML = dasher;
    }
    for (i = 0; i < x.length; i++) {
      document.getElementsByName("conversion")[i].innerHTML = convert;
    }
    for (i = 0; i < y.length; i++) {
      document.getElementsByName("ip")[i].innerHTML = word;
    }
    for (i = 0; i < z.length; i++) {
      document.getElementsByName("reversed")[i].innerHTML = backward ;
    }
  }
    else{
    alert('Invalid IP');
    document.getElementsByName("name")[0].focus();
    document.getElementsByName("name")[0].select();
  }
    
}


</script>
