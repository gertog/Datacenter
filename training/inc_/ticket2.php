<div class="title">
<h1>How to MP a phone modem</h1>
</div>
<ol>
  <li>Open BACC and log in</li>
    <a href="http://10.0.52.5:8100/adminui/index.jsp">http://10.0.52.5:8100/adminui/index.jsp</a>
  <li>Select Devices</li>
    <img src="./pics/device_select.png" alt="Select Device" style="width:500px;">
  <li>Make sure Search type is set to MAC Address search</li>
  <li> In the search box type: 1,6,<i>MAC address</i> of the cable modem </li>
    <img src="./pics/MAC_entry.png" alt="Enter MAC address" style="width:500px;">
  <li>Click Search</li>
  <li> select MAC to open</li>
  <li>Enter Account number in Owner Identifier</li>
  <li>Change Registered Class Of Service to : cm-prov-mta-only</li>
  <li>Change Registered DHCP Criteria to : cm-prov</li>
  <li>Scroll down and select MAX_CPE from the dropdown box</li>
  <li>Enter 2 in the box</li>
  <li>Press Add then Submit</li>
    <img src="./pics/Maxcpe_select.png" alt="Enter MAX_CPE" style="width:500px;">
  <li> In the search box type: 1,6,<i>MAC address</i> of the MTA </li>
    <img src="./pics/MAC_entry.png" alt="Enter MAC address" style="width:500px;">
  <li>Enter the first part of the FQDN from the ticket into Host Name</li>
      <i>Ex. FQDN: 1111111111.DPG1.mccvoice.com enter 1111111111</i>
  <li>Enter the rest of the FQDN into the Domain Name>/li>
  <li>Enter the account number into the Owner Identifier</li>
  <li>Select the switch that is listed in the ticket <i>ex Phliaadds0</i> make sure it is the same DPG as above and says 4Line</li>
  <li>Change Registered DHCP Criteria to mta-prov</li>
  <li>Click Submit</li>
    <img src="./pics/MTA_MP.png" alt="MTA configuration" style="width:500px;">
  <li>Enter the Cable Modem MAC back in</li>
    <img src="./pics/MAC_entry.png" alt="Enter MAC address" style="width:500px;">
  <li>Click Search</li>
    <li>When MAC screen shows back up put a check in the box next to the MAC address</li>
  <li> Click the Reset Button</li>
    <img src="./pics/reset_modem.png" alt="Reset Modem" style="width:500px;">
</ol>

This completes MP a phone modem
