# eHealth_Africa
Made as a part of EE 46 to make healthcare more social in Kano, Nigeria. 

Our initial prototype awards points for quantifiable tasks completed by healthcare workers, such as arriving to work on time and checking in, restocking medical supplies, and answering the “Question of the Day”. Receiving these points requires only to press buttons on the Homepage, directly under the Score.

Goal: To create a score-based accountability system that incentivizes health workers to complete daily tasks, refresh their knowledge, and achieve a high standard of engagement in their work. 

Components

Login Page
Doubles as a login page and a sign-up page
If the username exists in the database, will log the user in (if the correct password is given)
If the username does not exist in the database, will sign the user up using the details inputted  - in future versions, upon verification that this is indeed the user’s intention

Online/Offline verifier: analog to Facebook/Whatsapp feature

Pings some reliable website (i.e. google.com, Manu’s personal website) every 5 seconds. If not successful, will deduce the app is offline. Otherwise app is online.
We added an Online/Offline verifier of consideration of the potentially unreliable internet connection available in Kano, and specifically the healthcare facility.
Score stored in the Kano Connect database. An extra column is added to the database of healthcare worker information that already exists. Every time the score is changed through actions from the healthcare worker or the manager’s side, the database is updated.
Score is pulled from the database everytime the app loads up.

Leaderboard
The user can view increases and decreases in his score over time as a trendline.
If the user is doing above average, the user is able to view his trendline in comparison to the average trendline.
If the user is doing below average, we hide the average trendline and give the health worker advice on how to improve performance to reach a specific threshold.

Profile Page
The user’s information (name, location, etc.) are pulled from the database and displayed on the page directly following login.

Check-In Button:
Arriving to work on time awards points if the healthcare worker presses the “Check In” button upon arriving, and checks the time and location through the phone’s GPS in order to verify that the healthcare worker has, in fact, arrived to work on time. 
Completing daily tasks will require the healthcare worker to press “Done” when the tasks are completed. Their manager will then receive a notification on their own app, upon which they can manually verify that the task has in fact been completed, and allow points to be awarded.

Question of the Day
Answers stored in a separate second Kano Connect database. Information including which clinic the health employee works in in will allow managerial staff to identify trends in the knowledge of healthcare workers, and follow up with educational action if necessary.
Answering the “Question of the Day” will award points if the question is answered correctly. For this reason, questions will either be multiple choice or have simple one word answers.

Task Checklist
Managers have their own app which allows them to manage each healthcare worker’s score, and respond to healthcare workers’ activities through their app.
Once the healthcare worker claims they have finished their daily tasks by pressing the “Done” button, the manager of the clinic will receive a notification on their app. They will be able to approve this claim, upon which the healthcare worker will be notified and receive points.
	
Integrating Technology

SMS: Short Message Service
In the current iteration of the app, we can either verify that the Task Checklist has been completed by sending an SMS or an email to the manager, upon which he can reply “YES” to verify.

GIS: Geographical Information System
When users click the “Check-In” button when the arrive at work, the application will be able to access GIS technology to verify this claim geographically. We met with Kano Connect GIS Project Manager Dami Sonoiki to build this functionality out. 

Parse
Database used to store app information. First time a user logs in his information is sent to the Parse database. Based on his actions in the app, the score in the database increases or decreases.

PhoneGap
Converts Javascript into universal code, which can be run on iOS and Android mobile devices. Currently being used by eHealth Africa, so for consistency’s sake, and for ease of programming, we choose to use PhoneGap.

Kano Connect: The current platform the eHealth Africa has developed that provides tools to increase communication and reporting across the health sector. The connected information system for smartphone users was first built to monitor the routine immunization health system in Kano State. Our partners believe that the Kano Connect platform is a perfect ecosystem in which to pilot and test the solutions surrounding social drivers for health care.The Kano Connect system has several key components relevant to our application: The Open Data Kit (ODK), in particular, enables us to send out surveys and can collect data on responses. This is crucial in our question-of-the-day feature. The built-in SMS capability, mentioned above, provides a streamlined means of sending out text messages to all members of the Kano Connect network. 

