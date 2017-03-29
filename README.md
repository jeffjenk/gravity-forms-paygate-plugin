# gravity-forms-paygate-plugin
This is a fork of the official PayGate plugin for payment integrations with Gravity Forms. Some minor bug fixes have been implemented, but the primary intention of this fork was to fix notification issues in the plugin.

For information regarding the official PayGate plugin please refer to their [website documentation](https://developer.paygate.co.za/product/73).

## Updates
#### General
I have made some general bug fixes and updates to the code. Mostly just the really obvious stuff: removing redundant code and variables, fixing incorrect variable references etc. This is by no means an extensive overhaul. If you would like to contribute please feel free to make a pull request.

#### Notifications
The main reason I forked this code was to fix notifications. There was an option to send delayed notifications but the code was buggy and incomplete. At first I simply fixed the code to work the way it was supposed to but this was not a good implementation.

Since Gravity Forms v1.9.12 there has been an option to register new events for notifications. This is used in official Gravity Forms payment integrations such as Stripe and PayPal. It allows you to register new notification events to be triggered under specific circumstances in your plugin and fire purpose built notifications for specific situations. You can find out more about it in the [Gravity Forms Docs](https://www.gravityhelp.com/documentation/article/send-notifications-on-payment-events/).

I have registered new events for the 4 different status codes available in the PayGate response:

- Approved
- Declined
- Not done
- User cancelled

The default form submission event is also still available "Form is submitted" allowing you to fire a notification on form submit, something like "Order received: awaiting payment".

You will find the event option available under individual notifications in your forms settings:

![Events dropdown screenshot](https://raw.githubusercontent.com/jeffjenk/gravity-forms-paygate-plugin/master/notification-events.png)



