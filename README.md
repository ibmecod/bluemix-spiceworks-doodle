This a port to [IBM Bluemix](https://console.ng.bluemix.net/?cm_mmc=IBMEcoDWW-_-IIC-_-BluemixDay-_-BluemixDayAAAWebpage) of the [Spiceworks Doodle sample] (https://github.com/babbtx/spiceworks-doodle),  a PHP  example written for app developers learning the [Spiceworks Cloud App API] ( http://developers.spiceworks.com/documentation/cloud-apps).
See the [original app]  (https://github.com/babbtx/spiceworks-doodle) for a walkthrough of the source code. For the  Bluemix port the original app was modified with code to auto-discover  the access details of the MySQL managed service used by the app and code to create the database tables used by the sample when the app is initially run.

## Automatic Deploy (and signup if necessary) to Bluemix
Give it a try! Click the button below  and follow the prompts to fork into IBM DevOps Services and deploy your own copy of this application on Bluemix. Not signed up for  Bluemix already ? No worries, the 
button below works for new Bluemix users as well as existing ones. 

[![Deploy to Bluemix](https://bluemix.net/deploy/button.png)](https://bluemix.net/deploy?repository=https://github.com/ibmecod/bluemix-spiceworks-doodle)

Enjoy! (note, it may take minute or so for the app to start)

When you're done you can run the app by clicking on **View Your App** or look at the source code by clicking on **Edit Code**
![Alt text](images/deployed2.png "Optional title")

___

## Manual deploy (not necessary if you clicked on _Automatic Deploy_ above)

1. Create a Bluemix Account

    [Sign up](https://console.ng.bluemix.net/?cm_mmc=IBMEcoDWW-_-IIC-_-BluemixDay-_-BluemixDayAAAWebpage) in Bluemix, or use an existing account.

2. Download and install the [Cloud-foundry CLI](https://github.com/cloudfoundry/cli/releases) tool

3. After cloning this project locally, edit the `manifest.yml` file and change the `<application-name>` to something unique.
  ```none
  applications:
    name: <application-name>
    command: node app.js
    path: .
    memory: 128M
  ```
  The name you use will determinate your application url initially, e.g. `<application-name>.mybluemix.net`.

4. Connect to Bluemix in the command line tool.
  ```sh
  $ cf api https://api.ng.bluemix.net
  $ cf login -u <your user ID>
  ```
5. Create the ClearDB MySQL service instance
   ```sh
   $ cf create-service cleardb spark mysql
   ```
   
6. Push the app without  starting it
  ```sh
  $ cf push --no-start
  ```
 
7. Bind your app to the MySQL service instance (note: `<application-name>` is the name you used in Step 3).
   ```sh
   $ cf bind-service <application-name> mysql
   ```
   
8. Start the app (note: `<application-name>` is the name you used in Step 3).
   ```sh
   cf start <application-name>
   ```
9. Access the running application using the URL `<application-name>`.mybluemix.net where `<application-name>` is the name you used in step 3. The welcome page will have instructions about integrating this app into Spiceworks Developer Edition

___


## Deploy into Spiceworks Developer Edition

Once you're up and running on Bluemix you can  integrate this sample into Spiceworks Developer Edition by completing the following steps:

1. From the Spiceworks UI select **_Apps->Inventory_** or **_Apps->Help Desk_**
2. Select **_Settings->All_** and click on **_Manage Apps_**
3. Select **_New App->New Platform App_**
4. Name the app and enter ```bmdoodle ``` as the **_Namespace_**
5. Copy your apps URL and paste is as the **_App Host URL_**
6. Copy your apps URL and append ```/app.html``` as the **_Show on ticket_** e.g.  `<application-name>`.mybluemix.net/app.html where `<application-name>` is the name of your app
6. Under _**App Permissions**_, give the app read access to all the data
7. Save your changes


Test your new application by switching to different tickets, doodling, and saving your masterpieces from inside Spiceworks !

![Alt text](images/finished.png "Optional title")
	             
