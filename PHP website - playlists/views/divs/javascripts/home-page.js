$("#searchBox").unibox({
	// these are required:
	suggestUrl: 'http://www.mood.gg/suggests?input=', // the URL that provides the data for the suggest
	//ivfImagePath: 'http://localhost:3000', // the base path for instant visual feedback images
	// these are optional:
	instantVisualFeedback: 'top', // where the instant visual feedback should be shown, 'top', 'bottom', 'all', or 'none', default: 'all'
	throttleTime: 300, // the number of milliseconds before the suggest is triggered after finished input, default: 300ms
	extraHtml: undefined, // extra HTML code that is shown in each search suggest
	//highlight: true, // whether matched words should be highlighted, default: true
	queryVisualizationHeadline: '', // A headline for the image visualization, default: empty
	animationSpeed: 300, // speed of the animations, default: 300ms
	enterCallback: function(text,link){
		console.log('enter callback: '+text);
		document.body.className += ' fade-out2';
		window.location.href = 'http://www.mood.gg/choosechamp?championname=' + text;
	}, 
	// callback on what should happen when enter is pressed, default: undefined, meaning the link will be followed
	enterCallbackResult: function(text,link){
	    document.body.className += ' fade-out2';
		console.log('enter callback result: ' + text);
		window.location.href = 'http://www.mood.gg/choosechamp?championname=' + text;
	}, // callback on what should happen when enter is pressed on a result or a suggest is clicked
	placeholder: 'Search for something',
	maxWidth: 400,
	minChars: 2, // minimum number of characters before the suggests shows, default: 3
	suggestOrder: [], // the order of the suggests
	suggestSelectionOrder: [], // the order of how they should be selected
	noSuggests: "<img style='width: 60px; height: auto;'src='/images/feels-bad-man.png'> </img> <b style='font-size: calc(100% + 0.2vw);'>champ not found :( </b>",
	emptyQuerySuggests: undefined,
	//maxWidth: 400 // the maximum width of the suggest box, default: as wide as the input box
});