kalendar
========

Revamped version of my flat_calendar plugin. Now offers more features and easier customization.  
Supports both custom and Google Calendar events. 

Features
------

* __Multiday events__ — Events can last for days and kalendar will show them correctly
* __Google Calendar support__ — Include your calendarID and an APIkey and kalendar will show your google events as well.
* __Customizable__ — Easy to change kalendar’s color with 4 predefined colorsets.
* __Good performance__ — kalendar won’t use much of your precious power. Stuff are unloaded when it isn’t needed.


Customizations 
------

* __First day of the week__ — Default is monday but could be any day of the month
* __Toggle daylabel__
* __Starting month/year__ — Decide which month you would like to display from start
* __Color__
* __Eventhooks__

FAQ
-------

__When I insert the calendar, all the days are stacked upon each other. Why?__  
There needs to be a height set on the calendar element since some inner elements use absolute positioning.

Usage
-------

flat_calendar could be initialized with both HTML and JS, but I have discountinued developing with HTML support. flat_calendar is still available as a repo https://github.com/ericwenn/flat_calendar if you would like HTML support.  
The reason for this is as the plugin grew more complex and more customizations were added initializing with HTML became harder. Both to write but also for me to parse.

So kalendar only supports JS initialization, and it is for the best.

First of all though, you have to import the .css and .js file to your project.

### Simple kalendar

```javascript
jQuery(".kalendar-element").kalendar();	
```
This will display a red, awesome but pretty useless calendar. No events, no customizations, no funnies.

### Customized kalendar

When initializing your kalendar, include a set of options. These are all of the available:  
__Especially note the tracking variable__
```javascript
$('.example').kalendar({

	// Events are objects, placed inside of an array
	events: [
		{
			title: "Title of event",
			start: {
				date: YYYYMMDD or "YYYYMMDD",	// "20131230"
				time: "HH.MM"					// "12.00"
			},
			end: {
				date: YYYYMMDD or "YYYYMMDD",	// "20131230"
				time: "HH.MM"					// "20.00"
			},
			location: "Location",				// "London"
			url: "http://*.*",					// "http://example.com"
			color: "string"						// "red" string containing reference to the eventcolorsobject
		}
	],
	// Custom colorsets to set a specific color to an event. If one of the three variables isn’t set the inherit value will be used.
	eventcolors: {
		yellow: {
			background: "#FC0",					// Backgroundcolor, optional
			text: "#000",						// Text color, optional
			link: "#000"						// Link color, optional
		}
	}

	// Currently available colors are: red, blue, green, yellow. Red is the default.
	color: "blue",

	// Default is Monday, but any day of the week is applicable.
	firstDayOfWeek: "Sunday",

	// Google Calendar reference are objects, place inside of an array to support multiple calendars.
	// If you are unsure how to get an API-key visit: https://developers.google.com/google-apps/calendar/firstapp
	// If you are unsure how to get your calendar visit: https://support.google.com/calendar/answer/63962?hl=en
	googleCal: [{
		calendar: "calendarID",
		apikey: "APIkey"
	},
	{
		calendar: "calendarID",
		apikey: "APIkey"
	}],

	// Any name is possible, but note that not all names might fit in the UI

	monthHuman: [["JAN","January"],["FEB","February"], etc... ],

	// Regarding name lengths same applies here

	dayHuman: [["S","Sunday"],["M","Monday"], etc... ],

	// The text which represents links for events

	urlText: "View on Web",

	// Callbackevents will be fired when a certain criteria is met. The following are the currently supported events

	onInitiated: function() {},					// After the kalendar have been fully initiated. E.g when everything is loaded
	onGoogleParsed: function() {},				// After Google Calendar events, if they exist, have been parsed
	onMonthChanged: function() {},				// After events passed to the plugin have been parsed
	onDayShow: function() {},					// When a specific day have started to load. E.g when a day with an event attached to it is clicked
	onGridShow: function() {},					// When the grid of days have started to load. E.g when a specific dayview have been cancelled
	onDayClick: function(e) {}					// When a day gets clicked, no matter if it contains any event or not. Passed to this function is whether the day 												 is from this month or if it’s the current day. This can be accessed in the variable e.data.info

	// I decided to track people using this plugin in order to make it even better. 
	// The things I collect are current URL, color or kalendar, whether you decided to show days or not and your selected first day of the week.
	// Pass this variable as false and no tracking whatsoever will be done.
	// ***TRUE IS SET AS DEFAULT*** 
	tracking: true
});

```

Todo
-----
* Reccuring events, both for Google Calendar but also custom ones.
* Add minified version
* Weeknumber


Changelog
----
`v1.2.0 2014-01-08`: Added callback events and colors for events.  
`v1.1.0 2014-01-04`: Added links for events.  
`v1.0.0 2013-12-30`: First version published, yay!  


Thanks
-----
I hope you will like using this plugin as much as I did creating it.  
If you have __any__ questions regarding this plugin, or just in general, please contact me.


Eric Wennerberg
http://ericwenn.se
https://twitter.com/ericwenn