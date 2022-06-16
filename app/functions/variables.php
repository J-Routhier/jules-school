<?php

//////////////////////
//constant variables//
//////////////////////

//full path of website
// define("APPURI", "https://jules-school.test");
define("APPURI", "http://localhost:9000");

//list of navigation button names
define("NAVLIST", ["DASHBOARD", "TEACHERS", "STUDENTS", "COURSES", "SCHEDULE", "PROFILE"]);

//list of navigation button icons, in order as above.  0-3 are for building svg, either small (pos 1) or not.
define("NAVICONS", [
	'<svg class="mr-4 flex-shrink-0 ',

	'h-6 w-6 ',

	'text-cyan-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" 							stroke-width="2" stroke="#FCF7F8" aria-hidden="true">',

	'</svg>',

	'<path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />',


	'<path d="M12 14l9-5-9-5-9 5 9 5z" />
	  						<path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
							<path strokeLinecap="round" strokeLinejoin="round" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />',

	'<path stroke-linecap="round" stroke-linejoin="round" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />',

	'<path stroke-linecap="round" stroke-linejoin="round" d="M8 13v-1m4 1v-3m4 3V8M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />',

	'<path strokeLinecap="round" strokeLinejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />',

	'<path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />'
]);

//variable to populate data table, main title is database name, then sub arrays are [table label, class property];
define("TABLE_COLUMNS", [
	"students" => 	[
		["Student ID", "id"],
		["Name", "fullName"],
		["Email", "email"],
		["Date of Birth", "dob"],
		["Average Grade", "avgPercent"]
	],

	"teachers" => 	[
		["Teacher ID", "id"],
		["Name", "fullName"],
		["Email", "email"],
		["Tenor", "tenor"],
		["Specialty", "specialty"]
	]

]);

//variable to populate display panel, main title is database name, then sub arrays are [obj property name, label text, input type]
define("DISPLAY_OBJ_DATA", [
	"students" => [
		["id", "Student ID", "text"],
		["firstName", "First Name", "text"],
		["lastName", "Last Name", "text"],
		["email", "Email", "email"],
		["dob", "Date of Birth", "date"],
		["gender", "Gender", "text"],
		["grades", "Grade", "number\" step=\"0.1"],
		["avgGrade", "Average Grade", "number\" step=\"0.1"]
	],

	"teachers" => [
		["id", "Teacher ID", "text"],
		["firstName", "First Name", "text"],
		["lastName", "Last Name", "text"],
		["email", "Email", "email"],
		["dob", "Date of Birth", "date"],
		["gender", "Gender", "text"],
		["tenor", "Tenor", "text"],
		["specialty", "Specialty", "text"],
		["cv", "Curriculum Vitae", "text"]
	]
]);
