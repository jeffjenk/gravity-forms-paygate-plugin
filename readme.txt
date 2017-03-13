PayGate PayWeb3 Gravity Forms plugin v1.0.0 for gravityforms v1.9.15.9, WordPress v4.4.1
========================================================
Copyright (c) 2015 PayGate (Pty) Ltd

LICENSE:
 
This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

Please see http://www.opensource.org/licenses/ for a copy of the GNU Lesser
General Public License.

Thank you for downloading the PayGate PayWeb3 Gravity Forms plugin for gravityforms v1.9.15.9, WordPress v4.4.1

Along with this integration guide, your download should also have included your plugin in a .zip
(or compressed) format. In order to install it, kindly follow the steps and instructions outlined below, and
feel free to contact the PayGate support team at support@paygate.co.za should you require any assistance.

Installation Instructions
-------------------------

Automatic Installation:

- Perform only Step 1 below
- Log in to your WordPress Admin panel.
- Go to: Plugins > Add New > Upload Plugin
- Click: Choose File and find gravity-forms-paygate-plugin.zip in the unzipped folder
- Click: Install Now
- Click: Activate Plugin
- Perform step 4 below

Manual Installation:

- Perform step 1 to 4 below

**Step 1**

Extract the contents of above mentioned .zip file to your preferred location on your computer. This can be
done using unzipping applications such as WinZip and many others, but for a complete list of suitable
applications and programs, simply search the Internet for "unzipping application". This process should create
a number of files and folders at the location you chose to extract them to.

**Step 2**

Upload gravity-forms-paygate-plugin folder to your WordPress plugin directory ({wordpress}/wp-content/plugins/), ensuring you supplement
the files and folders already in place instead of replacing them. That can be done using FTP clients such as
FileZilla and many others, but for a complete list of suitable applications and programs, simply search the
Internet for "FTP client".

**Step 3**

Login to your WordPress admin area and navigate to the Plugins page. Once there, you'll notice your PayGate
PayWeb3 plugin for GravityForms is available. Simply click the Activate link below your plugin's title.

**Step 4**

Click on Forms link, a list of forms that you have created will be displayed. Then click on the form you want to intergrate with paygate and
under form settings list click on PayGate. Next to title PayGate Feeds click Add New to add a feed and enter required data.

Select transaction type: Products And Services and then you will see other settings.

On other settings: map paygate fields with form fields

Make sure your form has Pricing Fields, Address Fields and Email Field.

More importantly make sure you map paygate country field with form country field and paygate email field with form email field.

When done click on Update Settings/Save Settings.

**Step 5**
When a transaction is approved or failed user need to see confirmation message based on the transaction status. follow below instructions to create confirmation messages.

Add two confirmation messages:

Click on confirmations and add 2 new confirmations,

Confirmation Naming has to be as per below.
1. Confirmation Name: failed
2. Confirmation Name: approved