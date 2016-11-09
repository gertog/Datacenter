<h1>Checking for POP access</h1>
<ol>
  <li>Log in to Zimbra Admin</li>
    <a href="https://10.0.16.51:7071/zimbraAdmin/">https://10.0.16.51:7071/zimbraAdmin/</a>
  <li>Search for email</li>
  <li>In the upper right locate the server</li>
    <img src="./pics/locate_server.png">
  <li>Open a terminal and log in to server.</li>
    <i>Ex. sysadmin@njtozmbv15.mcomdc.com</i>
  <li>Once you are logged in switch to root</li>
    su -
  <li> cd /opt/zimbra/log</li>
  <li> Search mailbox.log for the user and POP</li>
    <i>Ex. cat mailbox.log | grep user | grep -i pop</i><br/>
    Or <i> cat mailbox.log* | grep user | grep -i pop</i> - This will search all available logs
  <li>If customer has a device accessing account with pop it will show POP access logging in and out</li>

This completes Checking for POP access
