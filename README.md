kalendar
========

Revamped version of my flat_calendar plugin. Now offers more features and easier customization.  
Supports both custom and Google Calendar events. 

Supported customizations include:  
* __First day of the week__ — Default is monday but could be any day of the month
* __Toggle daylabel__
* __Starting month/year__ — Decide which month you would like to display from start
* __Color__

Usage
-------

kalendar can be initialized with both pure HTML and JS. Personally I prefer JS because it gives you a better overview of the options. But you are free to use whatever you’d like. Obviously.

First of all though, you have to import the .css and .js file to your project.

### initialize with JS

#### Simple kalendar

```javascript
jQuery(".kalendar-element").kalendar();	
```
This will display a red, awesome but pretty useless calendar. No events, no customizations, no funnies.

#### Customized kalendar

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
			}
	],

	// Currently available colors are: red, blue, green, yellow. Red is the default.
	color: "blue",

	// Default is Monday, but any day of the week is applicable.
	firstDayOfWeek: "Sunday",

	// Google Calendar reference are objects, place inside of an array to support multiple calendars.
	// If you are unsure how to get an API-key visit: https://developers.google.com/google-apps/calendar/firstapp
	// If you are unsude how to get your calendar visit: https://support.google.com/calendar/answer/63962?hl=en
	googleCal: [{
		calendar: "calendarID",
		apikey: "APIkey"
	},
	{
		calendar: "calendarID",
		apikey: "APIkey"
	}],

	// Any name is possible, but note that not all names might fit in the UI

	monthHuman: [["JAN","January"],["FEB","February"],["MAR","March"],["APR","April"],["MAY","May"],["JUN","June"],["JUL","July"],["AUG","August"],["SEP","September"],["OCT","October"],["NOV","November"],["DEC","December"]],

	// Regarding name lengths same applies here
	
	dayHuman: [["S","Sunday"],["M","Monday"],["T","Thursday"],["W","Wednesday"],["T","Thursday"],["F","Friday"],["S","Saturday"]]

});

```




