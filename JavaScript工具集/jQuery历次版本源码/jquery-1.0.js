<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<!DOCTYPE html PUBLIC "" ""><HTML><HEAD>
<META http-equiv="Content-Type" content="text/html; charset=gb2312"></HEAD>
<BODY>
<PRE>/*
 * jQuery - New Wave Javascript
 *
 * Copyright (c) 2006 John Resig (jquery.com)
 * Dual licensed under the MIT (MIT-LICENSE.txt) 
 * and GPL (GPL-LICENSE.txt) licenses.
 *
 * $Date$
 * $Rev$
 */

// Global undefined variable
window.undefined = window.undefined;

/**
 * Create a new jQuery Object
 *
 * @test ok( Array.prototype.push, "Array.push()" );
 * @test ok( Function.prototype.apply, "Function.apply()" );
 * @test ok( document.getElementById, "getElementById" );
 * @test ok( document.getElementsByTagName, "getElementsByTagName" );
 * @test ok( RegExp, "RegExp" );
 * @test ok( jQuery, "jQuery" );
 * @test ok( $, "$()" );
 *
 * @constructor
 * @private
 * @name jQuery
 */
function jQuery(a,c) {

	// Shortcut for document ready (because $(document).each() is silly)
	if ( a &amp;&amp; a.constructor == Function &amp;&amp; jQuery.fn.ready )
		return jQuery(document).ready(a);

	// Make sure that a selection was provided
	a = a || jQuery.context || document;

	// Watch for when a jQuery object is passed as the selector
	if ( a.jquery )
		return $( jQuery.merge( a, [] ) );

	// Watch for when a jQuery object is passed at the context
	if ( c &amp;&amp; c.jquery )
		return $( c ).find(a);
	
	// If the context is global, return a new object
	if ( window == this )
		return new jQuery(a,c);

	// Handle HTML strings
	var m = /^[^&lt;]*(&lt;.+&gt;)[^&gt;]*$/.exec(a);
	if ( m ) a = jQuery.clean( [ m[1] ] );

	// Watch for when an array is passed in
	this.get( a.constructor == Array || a.length &amp;&amp; !a.nodeType &amp;&amp; a[0] != undefined &amp;&amp; a[0].nodeType ?
		// Assume that it is an array of DOM Elements
		jQuery.merge( a, [] ) :

		// Find the matching elements and save them for later
		jQuery.find( a, c ) );

  // See if an extra function was provided
	var fn = arguments[ arguments.length - 1 ];
	
	// If so, execute it in context
	if ( fn &amp;&amp; fn.constructor == Function )
		this.each(fn);
}

// Map over the $ in case of overwrite
if ( $ )
	jQuery._$ = $;

// Map the jQuery namespace to the '$' one
var $ = jQuery;

jQuery.fn = jQuery.prototype = {
	/**
	 * The current SVN version of jQuery.
	 *
	 * @private
	 * @property
	 * @name jquery
	 * @type String
	 * @cat Core
	 */
	jquery: "$Rev$",
	
	/**
	 * The number of elements currently matched.
	 *
	 * @example $("img").length;
	 * @before &lt;img src="test1.jpg"/&gt; &lt;img src="test2.jpg"/&gt;
	 * @result 2
	 *
	 * @test cmpOK( $("div").length, "==", 2, "Get Number of Elements Found" );
	 *
	 * @property
	 * @name length
	 * @type Number
	 * @cat Core
	 */
	
	/**
	 * The number of elements currently matched.
	 *
	 * @example $("img").size();
	 * @before &lt;img src="test1.jpg"/&gt; &lt;img src="test2.jpg"/&gt;
	 * @result 2
	 *
	 * @test cmpOK( $("div").size(), "==", 2, "Get Number of Elements Found" );
	 *
	 * @name size
	 * @type Number
	 * @cat Core
	 */
	size: function() {
		return this.length;
	},
	
	/**
	 * Access all matched elements. This serves as a backwards-compatible
	 * way of accessing all matched elements (other than the jQuery object
	 * itself, which is, in fact, an array of elements).
	 *
	 * @example $("img").get();
	 * @before &lt;img src="test1.jpg"/&gt; &lt;img src="test2.jpg"/&gt;
	 * @result [ &lt;img src="test1.jpg"/&gt; &lt;img src="test2.jpg"/&gt; ]
	 *
	 * @test isSet( $("div").get(), q("main","foo"), "Get All Elements" );
	 *
	 * @name get
	 * @type Array&lt;Element&gt;
	 * @cat Core
	 */
	 
	/**
	 * Access a single matched element. num is used to access the 
	 * Nth element matched.
	 *
	 * @example $("img").get(1);
	 * @before &lt;img src="test1.jpg"/&gt; &lt;img src="test2.jpg"/&gt;
	 * @result [ &lt;img src="test1.jpg"/&gt; ]
	 *
	 * @test cmpOK( $("div").get(0), "==", document.getElementById("main"), "Get A Single Element" );
	 *
	 * @name get
	 * @type Element
	 * @param Number num Access the element in the Nth position.
	 * @cat Core
	 */
	 
	/**
	 * Set the jQuery object to an array of elements.
	 *
	 * @example $("img").get([ document.body ]);
	 * @result $("img").get() == [ document.body ]
	 *
	 * @private
	 * @name get
	 * @type jQuery
	 * @param Elements elems An array of elements
	 * @cat Core
	 */
	get: function( num ) {
		// Watch for when an array (of elements) is passed in
		if ( num &amp;&amp; num.constructor == Array ) {

			// Use a tricky hack to make the jQuery object
			// look and feel like an array
			this.length = 0;
			[].push.apply( this, num );
			
			return this;
		} else
			return num == undefined ?

				// Return a 'clean' array
				jQuery.map( this, function(a){ return a } ) :

				// Return just the object
				this[num];
	},

	/**
	 * Execute a function within the context of every matched element.
	 * This means that every time the passed-in function is executed
	 * (which is once for every element matched) the 'this' keyword
	 * points to the specific element.
	 *
	 * Additionally, the function, when executed, is passed a single
	 * argument representing the position of the element in the matched
	 * set.
	 *
	 * @example $("img").each(function(){ this.src = "test.jpg"; });
	 * @before &lt;img/&gt; &lt;img/&gt;
	 * @result &lt;img src="test.jpg"/&gt; &lt;img src="test.jpg"/&gt;
	 *
	 * @test var div = $("div");
	 * div.each(function(){this.foo = 'zoo';});
	 * var pass = true;
	 * for ( var i = 0; i &lt; div.size(); i++ ) {
	 *   if ( div.get(i).foo != "zoo" ) pass = false;
	 * }
	 * ok( pass, "Execute a function, Relative" );
	 *
	 * @name each
	 * @type jQuery
	 * @param Function fn A function to execute
	 * @cat Core
	 */
	each: function( fn, args ) {
		return jQuery.each( this, fn, args );
	},

	index: function( obj ) {
		var pos = -1;
		this.each(function(i){
			if ( this == obj ) pos = i;
		});
		return pos;
	},
	
	/**
	 * Access a property on the first matched element.
	 * This method makes it easy to retreive a property value
	 * from the first matched element.
	 *
	 * @example $("img").attr("src");
	 * @before &lt;img src="test.jpg"/&gt;
	 * @result test.jpg
	 *
	 * @name attr
	 * @type Object
	 * @param String name The name of the property to access.
	 * @cat DOM
	 */
	 
	/**
	 * Set a hash of key/value object properties to all matched elements.
	 * This serves as the best way to set a large number of properties
	 * on all matched elements.
	 *
	 * @example $("img").attr({ src: "test.jpg", alt: "Test Image" });
	 * @before &lt;img/&gt;
	 * @result &lt;img src="test.jpg" alt="Test Image"/&gt;
	 *
	 * @test var pass = true;
	 * $("div").attr({foo: 'baz', zoo: 'ping'}).each(function(){
	 *   if ( this.getAttribute('foo') != "baz" &amp;&amp; this.getAttribute('zoo') != "ping" ) pass = false;
	 * });
	 * ok( pass, "Set Multiple Attributes" );
	 *
	 * @name attr
	 * @type jQuery
	 * @param Hash prop A set of key/value pairs to set as object properties.
	 * @cat DOM
	 */
	 
	/**
	 * Set a single property to a value, on all matched elements.
	 *
	 * @example $("img").attr("src","test.jpg");
	 * @before &lt;img/&gt;
	 * @result &lt;img src="test.jpg"/&gt;
	 *
	 * @test var div = $("div");
	 * div.attr("foo", "bar");
	 * var pass = true;
	 * for ( var i = 0; i &lt; div.size(); i++ ) {
	 *   if ( div.get(i).getAttribute('foo') != "bar" ) pass = false;
	 * }
	 * ok( pass, "Set Attribute" );
	 *
	 * @name attr
	 * @type jQuery
	 * @param String key The name of the property to set.
	 * @param Object value The value to set the property to.
	 * @cat DOM
	 */
	attr: function( key, value, type ) {
		// Check to see if we're setting style values
		return key.constructor != String || value != undefined ?
			this.each(function(){
				// See if we're setting a hash of styles
				if ( value == undefined )
					// Set all the styles
					for ( var prop in key )
						jQuery.attr(
							type ? this.style : this,
							prop, key[prop]
						);
				
				// See if we're setting a single key/value style
				else
					jQuery.attr(
						type ? this.style : this,
						key, value
					);
			}) :
			
			// Look for the case where we're accessing a style value
			jQuery[ type || "attr" ]( this[0], key );
	},

	/**
	 * Access a style property on the first matched element.
	 * This method makes it easy to retreive a style property value
	 * from the first matched element.
	 *
	 * @example $("p").css("red");
	 * @before &lt;p style="color:red;"&gt;Test Paragraph.&lt;/p&gt;
	 * @result red
	 *
	 * @name css
	 * @type Object
	 * @param String name The name of the property to access.
	 * @cat CSS
	 */
	 
	/**
	 * Set a hash of key/value style properties to all matched elements.
	 * This serves as the best way to set a large number of style properties
	 * on all matched elements.
	 *
	 * @example $("p").css({ color: "red", background: "blue" });
	 * @before &lt;p&gt;Test Paragraph.&lt;/p&gt;
	 * @result &lt;p style="color:red; background:blue;"&gt;Test Paragraph.&lt;/p&gt;
	 *
	 * @name css
	 * @type jQuery
	 * @param Hash prop A set of key/value pairs to set as style properties.
	 * @cat CSS
	 */
	 
	/**
	 * Set a single style property to a value, on all matched elements.
	 *
	 * @example $("p").css("color","red");
	 * @before &lt;p&gt;Test Paragraph.&lt;/p&gt;
	 * @result &lt;p style="color:red;"&gt;Test Paragraph.&lt;/p&gt;
	 *
	 * @name css
	 * @type jQuery
	 * @param String key The name of the property to set.
	 * @param Object value The value to set the property to.
	 * @cat CSS
	 */
	css: function( key, value ) {
		return this.attr( key, value, "curCSS" );
	},
	
	/**
	 * Retreive the text contents of all matched elements. The result is
	 * a string that contains the combined text contents of all matched
	 * elements. This method works on both HTML and XML documents.
	 *
	 * @example $("p").text();
	 * @before &lt;p&gt;Test Paragraph.&lt;/p&gt;
	 * @result Test Paragraph.
	 *
	 * @name text
	 * @type String
	 * @cat DOM
	 */
	text: function(e) {
		e = e || this;
		var t = "";
		for ( var j = 0; j &lt; e.length; j++ ) {
			var r = e[j].childNodes;
			for ( var i = 0; i &lt; r.length; i++ )
				t += r[i].nodeType != 1 ?
					r[i].nodeValue : jQuery.fn.text([ r[i] ]);
		}
		return t;
	},
	
	/**
	 * Wrap all matched elements with a structure of other elements.
	 * This wrapping process is most useful for injecting additional
	 * stucture into a document, without ruining the original semantic
	 * qualities of a document.
	 *
	 * The way that is works is that it goes through the first element argument
	 * provided and finds the deepest element within the structure - it is that
	 * element that will en-wrap everything else.
	 *
	 * @example $("p").wrap("&lt;div class='wrap'&gt;&lt;/div&gt;");
	 * @before &lt;p&gt;Test Paragraph.&lt;/p&gt;
	 * @result &lt;div class='wrap'&gt;&lt;p&gt;Test Paragraph.&lt;/p&gt;&lt;/div&gt;
	 *
	 * @name wrap
	 * @type jQuery
	 * @any String html A string of HTML, that will be created on the fly and wrapped around the target.
	 * @any Element elem A DOM element that will be wrapped.
	 * @any Array&lt;Element&gt; elems An array of elements, the first of which will be wrapped.
	 * @any Object obj Any object, converted to a string, then a text node.
	 * @cat DOM/Manipulation
	 */
	wrap: function() {
		// The elements to wrap the target around
		var a = jQuery.clean(arguments);
		
		// Wrap each of the matched elements individually
		return this.each(function(){
			// Clone the structure that we're using to wrap
			var b = a[0].cloneNode(true);
			
			// Insert it before the element to be wrapped
			this.parentNode.insertBefore( b, this );
			
			// Find he deepest point in the wrap structure
			while ( b.firstChild )
				b = b.firstChild;
			
			// Move the matched element to within the wrap structure
			b.appendChild( this );
		});
	},
	
	/**
	 * Append any number of elements to the inside of all matched elements.
	 * This operation is similar to doing an appendChild to all the 
	 * specified elements, adding them into the document.
	 * 
	 * @example $("p").append("&lt;b&gt;Hello&lt;/b&gt;");
	 * @before &lt;p&gt;I would like to say: &lt;/p&gt;
	 * @result &lt;p&gt;I would like to say: &lt;b&gt;Hello&lt;/b&gt;&lt;/p&gt;
	 *
	 * @name append
	 * @type jQuery
	 * @any String html A string of HTML, that will be created on the fly and appended to the target.
	 * @any Element elem A DOM element that will be appended.
	 * @any Array&lt;Element&gt; elems An array of elements, all of which will be appended.
	 * @any Object obj Any object, converted to a string, then a text node.
	 * @cat DOM/Manipulation
	 */
	append: function() {
		return this.domManip(arguments, true, 1, function(a){
			this.appendChild( a );
		});
	},
	
	/**
	 * Prepend any number of elements to the inside of all matched elements.
	 * This operation is the best way to insert a set of elements inside, at the 
	 * beginning, of all the matched element.
	 * 
	 * @example $("p").prepend("&lt;b&gt;Hello&lt;/b&gt;");
	 * @before &lt;p&gt;, how are you?&lt;/p&gt;
	 * @result &lt;p&gt;&lt;b&gt;Hello&lt;/b&gt;, how are you?&lt;/p&gt;
	 *
	 * @name prepend
	 * @type jQuery
	 * @any String html A string of HTML, that will be created on the fly and prepended to the target.
	 * @any Element elem A DOM element that will be prepended.
	 * @any Array&lt;Element&gt; elems An array of elements, all of which will be prepended.
	 * @any Object obj Any object, converted to a string, then a text node.
	 * @cat DOM/Manipulation
	 */
	prepend: function() {
		return this.domManip(arguments, true, -1, function(a){
			this.insertBefore( a, this.firstChild );
		});
	},
	
	/**
	 * Insert any number of elements before each of the matched elements.
	 * 
	 * @example $("p").before("&lt;b&gt;Hello&lt;/b&gt;");
	 * @before &lt;p&gt;how are you?&lt;/p&gt;
	 * @result &lt;b&gt;Hello&lt;/b&gt;&lt;p&gt;how are you?&lt;/p&gt;
	 *
	 * @name before
	 * @type jQuery
	 * @any String html A string of HTML, that will be created on the fly and inserted.
	 * @any Element elem A DOM element that will beinserted.
	 * @any Array&lt;Element&gt; elems An array of elements, all of which will be inserted.
	 * @any Object obj Any object, converted to a string, then a text node.
	 * @cat DOM/Manipulation
	 */
	before: function() {
		return this.domManip(arguments, false, 1, function(a){
			this.parentNode.insertBefore( a, this );
		});
	},
	
	/**
	 * Insert any number of elements after each of the matched elements.
	 * 
	 * @example $("p").after("&lt;p&gt;I'm doing fine.&lt;/p&gt;");
	 * @before &lt;p&gt;How are you?&lt;/p&gt;
	 * @result &lt;p&gt;How are you?&lt;/p&gt;&lt;p&gt;I'm doing fine.&lt;/p&gt;
	 *
	 * @name after
	 * @type jQuery
	 * @any String html A string of HTML, that will be created on the fly and inserted.
	 * @any Element elem A DOM element that will beinserted.
	 * @any Array&lt;Element&gt; elems An array of elements, all of which will be inserted.
	 * @any Object obj Any object, converted to a string, then a text node.
	 * @cat DOM/Manipulation
	 */
	after: function() {
		return this.domManip(arguments, false, -1, function(a){
			this.parentNode.insertBefore( a, this.nextSibling );
		});
	},
	
	/**
	 * End the most recent 'destructive' operation, reverting the list of matched elements
	 * back to its previous state. After an end operation, the list of matched elements will 
	 * revert to the last state of matched elements.
	 *
	 * @example $("p").find("span").end();
	 * @before &lt;p&gt;&lt;span&gt;Hello&lt;/span&gt;, how are you?&lt;/p&gt;
	 * @result $("p").find("span").end() == [ &lt;p&gt;...&lt;/p&gt; ]
	 *
	 * @name end
	 * @type jQuery
	 * @cat DOM/Traversing
	 */
	end: function() {
		return this.get( this.stack.pop() );
	},
	
	/**
	 * Searches for all elements that match the specified expression.
	 * This method is the optimal way of finding additional descendant
	 * elements with which to process.
	 *
	 * All searching is done using a jQuery expression. The expression can be 
	 * written using CSS 1-3 Selector syntax, or basic XPath.
	 *
	 * @example $("p").find("span");
	 * @before &lt;p&gt;&lt;span&gt;Hello&lt;/span&gt;, how are you?&lt;/p&gt;
	 * @result $("p").find("span") == [ &lt;span&gt;Hello&lt;/span&gt; ]
	 *
	 * @name find
	 * @type jQuery
	 * @param String expr An expression to search with.
	 * @cat DOM/Traversing
	 */
	find: function(t) {
		return this.pushStack( jQuery.map( this, function(a){
			return jQuery.find(t,a);
		}), arguments );
	},

	clone: function(deep) {
		return this.pushStack( jQuery.map( this, function(a){
			return a.cloneNode( deep != undefined ? deep : true );
		}), arguments );
	},
	
	/**
	 * Removes all elements from the set of matched elements that do not 
	 * match the specified expression. This method is used to narrow down
	 * the results of a search.
	 *
	 * All searching is done using a jQuery expression. The expression
	 * can be written using CSS 1-3 Selector syntax, or basic XPath.
	 * 
	 * @example $("p").filter(".selected")
	 * @before &lt;p class="selected"&gt;Hello&lt;/p&gt;&lt;p&gt;How are you?&lt;/p&gt;
	 * @result $("p").filter(".selected") == [ &lt;p class="selected"&gt;Hello&lt;/p&gt; ]
	 *
	 * @name filter
	 * @type jQuery
	 * @param String expr An expression to search with.
	 * @cat DOM/Traversing
	 */

	/**
	 * Removes all elements from the set of matched elements that do not
	 * match at least one of the expressions passed to the function. This 
	 * method is used when you want to filter the set of matched elements 
	 * through more than one expression.
	 *
	 * Elements will be retained in the jQuery object if they match at
	 * least one of the expressions passed.
	 *
	 * @example $("p").filter([".selected", ":first"])
	 * @before &lt;p&gt;Hello&lt;/p&gt;&lt;p&gt;Hello Again&lt;/p&gt;&lt;p class="selected"&gt;And Again&lt;/p&gt;
	 * @result $("p").filter([".selected", ":first"]) == [ &lt;p&gt;Hello&lt;/p&gt;, &lt;p class="selected"&gt;And Again&lt;/p&gt; ]
	 *
	 * @name filter
	 * @type jQuery
	 * @param Array&lt;String&gt; exprs A set of expressions to evaluate against
	 * @cat DOM/Traversing
	 */
	filter: function(t) {
		return this.pushStack(
			t.constructor == Array &amp;&amp;
			jQuery.map(this,function(a){
				for ( var i = 0; i &lt; t.length; i++ )
					if ( jQuery.filter(t[i],[a]).r.length )
						return a;
			}) ||

			t.constructor == Boolean &amp;&amp;
			( t ? this.get() : [] ) ||

			t.constructor == Function &amp;&amp;
			jQuery.grep( this, t ) ||

			jQuery.filter(t,this).r, arguments );
	},
	
	/**
	 * Removes the specified Element from the set of matched elements. This
	 * method is used to remove a single Element from a jQuery object.
	 *
	 * @example $("p").not( document.getElementById("selected") )
	 * @before &lt;p&gt;Hello&lt;/p&gt;&lt;p id="selected"&gt;Hello Again&lt;/p&gt;
	 * @result [ &lt;p&gt;Hello&lt;/p&gt; ]
	 *
	 * @name not
	 * @type jQuery
	 * @param Element el An element to remove from the set
	 * @cat DOM/Traversing
	 */

	/**
	 * Removes elements matching the specified expression from the set
	 * of matched elements. This method is used to remove one or more
	 * elements from a jQuery object.
	 * 
	 * @example $("p").not("#selected")
	 * @before &lt;p&gt;Hello&lt;/p&gt;&lt;p id="selected"&gt;Hello Again&lt;/p&gt;
	 * @result [ &lt;p&gt;Hello&lt;/p&gt; ]
	 *
	 * @name not
	 * @type jQuery
	 * @param String expr An expression with which to remove matching elements
	 * @cat DOM/Traversing
	 */
	not: function(t) {
		return this.pushStack( t.constructor == String ?
			jQuery.filter(t,this,false).r :
			jQuery.grep(this,function(a){ return a != t; }), arguments );
	},

	/**
	 * Adds the elements matched by the expression to the jQuery object. This
	 * can be used to concatenate the result sets of two expressions.
	 *
	 * @example $("p").add("span")
	 * @before &lt;p&gt;Hello&lt;/p&gt;&lt;p&gt;&lt;span&gt;Hello Again&lt;/span&gt;&lt;/p&gt;
	 * @result [ &lt;p&gt;Hello&lt;/p&gt;, &lt;span&gt;Hello Again&lt;/span&gt; ]
	 *
	 * @name add
	 * @type jQuery
	 * @param String expr An expression whose matched elements are added
	 * @cat DOM/Traversing
	 */

	/**
	 * Adds each of the Elements in the array to the set of matched elements.
	 * This is used to add a set of Elements to a jQuery object.
	 *
	 * @example $("p").add([document.getElementById("a"), document.getElementById("b")])
	 * @before &lt;p&gt;Hello&lt;/p&gt;&lt;p&gt;&lt;span id="a"&gt;Hello Again&lt;/span&gt;&lt;span id="b"&gt;And Again&lt;/span&gt;&lt;/p&gt;
	 * @result [ &lt;p&gt;Hello&lt;/p&gt;, &lt;span id="a"&gt;Hello Again&lt;/span&gt;, &lt;span id="b"&gt;And Again&lt;/span&gt; ]
	 *
	 * @name add
	 * @type jQuery
	 * @param Array&lt;Element&gt; els An array of Elements to add
	 * @cat jQuery
	 */

	/**
	 * Adds a single Element to the set of matched elements. This is used to
	 * add a single Element to a jQuery object.
	 *
	 * @example $("p").add( document.getElementById("a") )
	 * @before &lt;p&gt;Hello&lt;/p&gt;&lt;p&gt;&lt;span id="a"&gt;Hello Again&lt;/span&gt;&lt;/p&gt;
	 * @result [ &lt;p&gt;Hello&lt;/p&gt;, &lt;span id="a"&gt;Hello Again&lt;/span&gt; ]
	 *
	 * @name add
	 * @type jQuery
	 * @param Element el An Element to add
	 * @cat jQuery
	 */
	add: function(t) {
		return this.pushStack( jQuery.merge( this, t.constructor == String ?
			jQuery.find(t) : t.constructor == Array ? t : [t] ), arguments );
	},
	
	/**
	 * A wrapper function for each() to be used by append and prepend.
	 * Handles cases where you're trying to modify the inner contents of
	 * a table, when you actually need to work with the tbody.
	 *
	 * @member jQuery
	 * @param {String} expr The expression with which to filter
	 * @type Boolean
	 * @cat jQuery
	 */
	is: function(expr) {
		return expr ? jQuery.filter(expr,this).r.length &gt; 0 : this.length &gt; 0;
	},
	
	/**
	 * 
	 *
	 * @private
	 * @name domManip
	 * @param Array args
	 * @param Boolean table
	 * @param Number int
	 * @param Function fn The function doing the DOM manipulation.
	 * @type jQuery
	 */
	domManip: function(args, table, dir, fn){
		var clone = this.size() &gt; 1;
		var a = jQuery.clean(args);
		
		return this.each(function(){
			var obj = this;
			
			if ( table &amp;&amp; this.nodeName == "TABLE" &amp;&amp; a[0].nodeName != "THEAD" ) {
				var tbody = this.getElementsByTagName("tbody");

				if ( !tbody.length ) {
					obj = document.createElement("tbody");
					this.appendChild( obj );
				} else
					obj = tbody[0];
			}

			for ( var i = ( dir &lt; 0 ? a.length - 1 : 0 );
				i != ( dir &lt; 0 ? dir : a.length ); i += dir ) {
					fn.apply( obj, [ clone ? a[i].cloneNode(true) : a[i] ] );
			}
		});
	},
	
	/**
	 * 
	 *
	 * @private
	 * @name pushStack
	 * @param Array a
	 * @param Array args
	 * @type jQuery
	 */
	pushStack: function(a,args) {
		var fn = args &amp;&amp; args[args.length-1];

		if ( !fn || fn.constructor != Function ) {
			if ( !this.stack ) this.stack = [];
			this.stack.push( this.get() );
			this.get( a );
		} else {
			var old = this.get();
			this.get( a );
			if ( fn.constructor == Function )
				return this.each( fn );
			this.get( old );
		}

		return this;
	}
};

/**
 * 
 *
 * @private
 * @name extend
 * @param Object obj
 * @param Object prop
 * @type Object
 */
 
/**
 * Extend one object with another, returning the original,
 * modified, object. This is a great utility for simple inheritance.
 *
 * @name jQuery.extend
 * @param Object obj The object to extend
 * @param Object prop The object that will be merged into the first.
 * @type Object
 * @cat Javascript
 */
jQuery.extend = jQuery.fn.extend = function(obj,prop) {
	if ( !prop ) { prop = obj; obj = this; }
	for ( var i in prop ) obj[i] = prop[i];
	return obj;
};

jQuery.extend({
	/**
	 * @private
	 * @name init
	 * @type undefined
	 */
	init: function(){
		jQuery.initDone = true;
		
		jQuery.each( jQuery.macros.axis, function(i,n){
			jQuery.fn[ i ] = function(a) {
				var ret = jQuery.map(this,n);
				if ( a &amp;&amp; a.constructor == String )
					ret = jQuery.filter(a,ret).r;
				return this.pushStack( ret, arguments );
			};
		});
		
		jQuery.each( jQuery.macros.to, function(i,n){
			jQuery.fn[ i ] = function(){
				var a = arguments;
				return this.each(function(){
					for ( var j = 0; j &lt; a.length; j++ )
						$(a[j])[n]( this );
				});
			};
		});
		
		jQuery.each( jQuery.macros.each, function(i,n){
			jQuery.fn[ i ] = function() {
				return this.each( n, arguments );
			};
		});

		jQuery.each( jQuery.macros.filter, function(i,n){
			jQuery.fn[ n ] = function(num,fn) {
				return this.filter( ":" + n + "(" + num + ")", fn );
			};
		});
		
		jQuery.each( jQuery.macros.attr, function(i,n){
			n = n || i;
			jQuery.fn[ i ] = function(h) {
				return h == undefined ?
					this.length ? this[0][n] : null :
					this.attr( n, h );
			};
		});
	
		jQuery.each( jQuery.macros.css, function(i,n){
			jQuery.fn[ n ] = function(h) {
				return h == undefined ?
					( this.length ? jQuery.css( this[0], n ) : null ) :
					this.css( n, h );
			};
		});
	
	},
	
	/**
	 * A generic iterator function, which can be used to seemlessly
	 * iterate over both objects and arrays.
	 *
	 * @name jQuery.each
	 * @param Object obj The object, or array, to iterate over.
	 * @param Object fn The function that will be executed on every object.
	 * @type Object
	 * @cat Javascript
	 */
	each: function( obj, fn, args ) {
		if ( obj.length == undefined )
			for ( var i in obj )
				fn.apply( obj[i], args || [i, obj[i]] );
		else
			for ( var i = 0; i &lt; obj.length; i++ )
				fn.apply( obj[i], args || [i, obj[i]] );
		return obj;
	},
	
	className: {
		add: function(o,c){
			if (jQuery.className.has(o,c)) return;
			o.className += ( o.className ? " " : "" ) + c;
		},
		remove: function(o,c){
			o.className = !c ? "" :
				o.className.replace(
					new RegExp("(^|\\s*\\b[^-])"+c+"($|\\b(?=[^-]))", "g"), "");
		},
		has: function(e,a) {
			if ( e.className != undefined )
				e = e.className;
			return new RegExp("(^|\\s)" + a + "(\\s|$)").test(e);
		}
	},
	
	/**
	 * Swap in/out style options.
	 * @private
	 */
	swap: function(e,o,f) {
		for ( var i in o ) {
			e.style["old"+i] = e.style[i];
			e.style[i] = o[i];
		}
		f.apply( e, [] );
		for ( var i in o )
			e.style[i] = e.style["old"+i];
	},
	
	css: function(e,p) {
		if ( p == "height" || p == "width" ) {
			var old = {}, oHeight, oWidth, d = ["Top","Bottom","Right","Left"];
	
			for ( var i in d ) {
				old["padding" + d[i]] = 0;
				old["border" + d[i] + "Width"] = 0;
			}
	
			jQuery.swap( e, old, function() {
				if (jQuery.css(e,"display") != "none") {
					oHeight = e.offsetHeight;
					oWidth = e.offsetWidth;
				} else {
					e = $(e.cloneNode(true)).css({
						visibility: "hidden", position: "absolute", display: "block"
					}).prependTo("body")[0];

					oHeight = e.clientHeight;
					oWidth = e.clientWidth;
					
					e.parentNode.removeChild(e);
				}
			});
	
			return p == "height" ? oHeight : oWidth;
		} else if ( p == "opacity" &amp;&amp; jQuery.browser.msie )
			return parseFloat( jQuery.curCSS(e,"filter").replace(/[^0-9.]/,"") ) || 1;

		return jQuery.curCSS( e, p );
	},

	curCSS: function(elem, prop, force) {
		var ret;
	
		if (!force &amp;&amp; elem.style[prop]) {

			ret = elem.style[prop];

		} else if (elem.currentStyle) {

			var newProp = prop.replace(/\-(\w)/g,function(m,c){return c.toUpperCase()}); 
			ret = elem.currentStyle[prop] || elem.currentStyle[newProp];

		} else if (document.defaultView &amp;&amp; document.defaultView.getComputedStyle) {

			prop = prop.replace(/([A-Z])/g,"-$1").toLowerCase();
			var cur = document.defaultView.getComputedStyle(elem, null);

			if ( cur )
				ret = cur.getPropertyValue(prop);
			else if ( prop == 'display' )
				ret = 'none';
			else
				jQuery.swap(elem, { display: 'block' }, function() {
					ret = document.defaultView.getComputedStyle(this,null).getPropertyValue(prop);
				});

		}
		
		return ret;
	},
	
	clean: function(a) {
		var r = [];
		for ( var i = 0; i &lt; a.length; i++ ) {
			if ( a[i].constructor == String ) {

				var table = "";
	
				if ( !a[i].indexOf("&lt;thead") || !a[i].indexOf("&lt;tbody") ) {
					table = "thead";
					a[i] = "&lt;table&gt;" + a[i] + "&lt;/table&gt;";
				} else if ( !a[i].indexOf("&lt;tr") ) {
					table = "tr";
					a[i] = "&lt;table&gt;" + a[i] + "&lt;/table&gt;";
				} else if ( !a[i].indexOf("&lt;td") || !a[i].indexOf("&lt;th") ) {
					table = "td";
					a[i] = "&lt;table&gt;&lt;tbody&gt;&lt;tr&gt;" + a[i] + "&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;";
				}
	
				var div = document.createElement("div");
				div.innerHTML = a[i];
	
				if ( table ) {
					div = div.firstChild;
					if ( table != "thead" ) div = div.firstChild;
					if ( table == "td" ) div = div.firstChild;
				}
	
				for ( var j = 0; j &lt; div.childNodes.length; j++ )
					r.push( div.childNodes[j] );
				} else if ( a[i].jquery || a[i].length &amp;&amp; !a[i].nodeType )
					for ( var k = 0; k &lt; a[i].length; k++ )
						r.push( a[i][k] );
				else if ( a[i] !== null )
					r.push(	a[i].nodeType ? a[i] : document.createTextNode(a[i].toString()) );
		}
		return r;
	},
	
	expr: {
		"": "m[2]== '*'||a.nodeName.toUpperCase()==m[2].toUpperCase()",
		"#": "a.getAttribute('id')&amp;&amp;a.getAttribute('id')==m[2]",
		":": {
			// Position Checks
			lt: "i&lt;m[3]-0",
			gt: "i&gt;m[3]-0",
			nth: "m[3]-0==i",
			eq: "m[3]-0==i",
			first: "i==0",
			last: "i==r.length-1",
			even: "i%2==0",
			odd: "i%2",
			
			// Child Checks
			"first-child": "jQuery.sibling(a,0).cur",
			"last-child": "jQuery.sibling(a,0).last",
			"only-child": "jQuery.sibling(a).length==1",
			
			// Parent Checks
			parent: "a.childNodes.length",
			empty: "!a.childNodes.length",
			
			// Text Check
			contains: "(a.innerText||a.innerHTML).indexOf(m[3])&gt;=0",
			
			// Visibility
			visible: "a.type!='hidden'&amp;&amp;jQuery.css(a,'display')!='none'&amp;&amp;jQuery.css(a,'visibility')!='hidden'",
			hidden: "a.type=='hidden'||jQuery.css(a,'display')=='none'||jQuery.css(a,'visibility')=='hidden'",
			
			// Form elements
			enabled: "!a.disabled",
			disabled: "a.disabled",
			checked: "a.checked",
			selected: "a.selected"
		},
		".": "jQuery.className.has(a,m[2])",
		"@": {
			"=": "z==m[4]",
			"!=": "z!=m[4]",
			"^=": "!z.indexOf(m[4])",
			"$=": "z.substr(z.length - m[4].length,m[4].length)==m[4]",
			"*=": "z.indexOf(m[4])&gt;=0",
			"": "z"
		},
		"[": "jQuery.find(m[2],a).length"
	},
	
	token: [
		"\\.\\.|/\\.\\.", "a.parentNode",
		"&gt;|/", "jQuery.sibling(a.firstChild)",
		"\\+", "jQuery.sibling(a).next",
		"~", function(a){
			var r = [];
			var s = jQuery.sibling(a);
			if ( s.n &gt; 0 )
				for ( var i = s.n; i &lt; s.length; i++ )
					r.push( s[i] );
			return r;
		}
	],
	
	/**
	 *
	 * @test t( "Element Selector", "div", ["main","foo"] );
	 * @test t( "Element Selector", "body", ["body"] );
	 * @test t( "Element Selector", "html", ["html"] );
	 * @test cmpOK( $("*").size(), "&gt;=", 30, "Element Selector" );
	 * @test t( "Parent Element", "div div", ["foo"] );
	 *
	 * @test t( "ID Selector", "#body", ["body"] );
	 * @test t( "ID Selector w/ Element", "body#body", ["body"] );
	 * @test t( "ID Selector w/ Element", "ul#first", [] );
	 *
	 * @test t( "Class Selector", ".blog", ["mark","simon"] );
	 * @test t( "Class Selector", ".blog.link", ["simon"] );
	 * @test t( "Class Selector w/ Element", "a.blog", ["mark","simon"] );
	 * @test t( "Parent Class Selector", "p .blog", ["mark","simon"] );
	 *
	 * @test t( "Comma Support", "a.blog, div", ["mark","simon","main","foo"] );
	 * @test t( "Comma Support", "a.blog , div", ["mark","simon","main","foo"] );
	 * @test t( "Comma Support", "a.blog ,div", ["mark","simon","main","foo"] );
	 * @test t( "Comma Support", "a.blog,div", ["mark","simon","main","foo"] );
	 *
	 * @test t( "Child", "p &gt; a", ["simon1","google","groups","mark","yahoo","simon"] );
	 * @test t( "Child", "p&gt; a", ["simon1","google","groups","mark","yahoo","simon"] );
	 * @test t( "Child", "p &gt;a", ["simon1","google","groups","mark","yahoo","simon"] );
	 * @test t( "Child", "p&gt;a", ["simon1","google","groups","mark","yahoo","simon"] );
	 * @test t( "Child w/ Class", "p &gt; a.blog", ["mark","simon"] );
	 * @test t( "All Children", "code &gt; *", ["anchor1","anchor2"] );
	 * @test t( "All Grandchildren", "p &gt; * &gt; *", ["anchor1","anchor2"] );
	 * @test t( "Adjacent", "a + a", ["groups"] );
	 * @test t( "Adjacent", "a +a", ["groups"] );
	 * @test t( "Adjacent", "a+ a", ["groups"] );
	 * @test t( "Adjacent", "a+a", ["groups"] );
	 * @test t( "Adjacent", "p + p", ["ap","en","sap"] );
	 * @test t( "Comma, Child, and Adjacent", "a + a, code &gt; a", ["groups","anchor1","anchor2"] );
	 * @test t( "First Child", "p:first-child", ["firstp","sndp"] );
   * @test t( "Attribute Exists", "a[@title]", ["google"] );
	 * @test t( "Attribute Exists", "*[@title]", ["google"] );
	 * @test t( "Attribute Exists", "[@title]", ["google"] );
	 * @test t( "Attribute Equals", "a[@rel='bookmark']", ["simon1"] );
	 * @test t( "Attribute Equals", 'a[@rel="bookmark"]', ["simon1"] );
	 * @test t( "Attribute Equals", "a[@rel=bookmark]", ["simon1"] );
	 * @test t( "Multiple Attribute Equals", "input[@type='hidden'],input[@type='radio']", ["hidden1","radio1","radio2"] );
	 * @test t( "Multiple Attribute Equals", "input[@type=\"hidden\"],input[@type='radio']", ["hidden1","radio1","radio2"] );
	 * @test t( "Multiple Attribute Equals", "input[@type=hidden],input[@type=radio]", ["hidden1","radio1","radio2"] );
	 *
	 * @test t( "Attribute Begins With", "a[@href ^= 'http://www']", ["google","yahoo"] );
	 * @test t( "Attribute Ends With", "a[@href $= 'org/']", ["mark"] );
	 * @test t( "Attribute Contains", "a[@href *= 'google']", ["google","groups"] );
	 * @test t( "First Child", "p:first-child", ["firstp","sndp"] );
	 * @test t( "Last Child", "p:last-child", ["sap"] );
	 * @test t( "Only Child", "a:only-child", ["simon1","anchor1","yahoo","anchor2"] );
	 * @test t( "Empty", "ul:empty", ["firstUL"] );
	 * @test t( "Enabled UI Element", "input:enabled", ["text1","radio1","radio2","check1","check2","hidden1","hidden2"] );
	 * @test t( "Disabled UI Element", "input:disabled", ["text2"] );
	 * @test t( "Checked UI Element", "input:checked", ["radio2","check1"] );
	 * @test t( "Text Contains", "a:contains('Google')", ["google","groups"] );
	 * @test t( "Text Contains", "a:contains('Google Groups')", ["groups"] );
	 * @test t( "Element Preceded By", "p ~ div", ["foo"] );
	 * @test t( "Not", "a.blog:not(.link)", ["mark"] );
	 *
	 * @test cmpOK( jQuery.find("//*").length, "&gt;=", 30, "All Elements (//*)" );
	 * @test t( "All Div Elements", "//div", ["main","foo"] );
	 * @test t( "Absolute Path", "/html/body", ["body"] );
	 * @test t( "Absolute Path w/ *", "/* /body", ["body"] );
	 * @test t( "Long Absolute Path", "/html/body/dl/div/div/p", ["sndp","en","sap"] );
	 * @test t( "Absolute and Relative Paths", "/html//div", ["main","foo"] );
	 * @test t( "All Children, Explicit", "//code/*", ["anchor1","anchor2"] );
	 * @test t( "All Children, Implicit", "//code/", ["anchor1","anchor2"] );
	 * @test t( "Attribute Exists", "//a[@title]", ["google"] );
	 * @test t( "Attribute Equals", "//a[@rel='bookmark']", ["simon1"] );
	 * @test t( "Parent Axis", "//p/..", ["main","foo"] );
	 * @test t( "Sibling Axis", "//p/../", ["firstp","ap","foo","first","firstUL","empty","form","sndp","en","sap"] );
	 * @test t( "Sibling Axis", "//p/../*", ["firstp","ap","foo","first","firstUL","empty","form","sndp","en","sap"] );
	 * @test t( "Has Children", "//p[a]", ["firstp","ap","en","sap"] );
	 *
	 * @test t( "nth Element", "p:nth(1)", ["ap"] );
	 * @test t( "First Element", "p:first", ["firstp"] );
	 * @test t( "Last Element", "p:last", ["first"] );
	 * @test t( "Even Elements", "p:even", ["firstp","sndp","sap"] );
	 * @test t( "Odd Elements", "p:odd", ["ap","en","first"] );
	 * @test t( "Position Equals", "p:eq(1)", ["ap"] );
	 * @test t( "Position Greater Than", "p:gt(0)", ["ap","sndp","en","sap","first"] );
	 * @test t( "Position Less Than", "p:lt(3)", ["firstp","ap","sndp"] );
	 * @test t( "Is A Parent", "p:parent", ["firstp","ap","sndp","en","sap","first"] );
	 * @test t( "Is Visible", "input:visible", ["text1","text2","radio1","radio2","check1","check2"] );
	 * @test t( "Is Hidden", "input:hidden", ["hidden1","hidden2"] );
	 *
	 * @name jQuery.find
	 * @private
	 */
	find: function( t, context ) {
		// Make sure that the context is a DOM Element
		if ( context &amp;&amp; context.nodeType == undefined )
			context = null;
	
		// Set the correct context (if none is provided)
		context = context || jQuery.context || document;
	
		if ( t.constructor != String ) return [t];
	
		if ( !t.indexOf("//") ) {
			context = context.documentElement;
			t = t.substr(2,t.length);
		} else if ( !t.indexOf("/") ) {
			context = context.documentElement;
			t = t.substr(1,t.length);
			// FIX Assume the root element is right :(
			if ( t.indexOf("/") &gt;= 1 )
				t = t.substr(t.indexOf("/"),t.length);
		}
	
		var ret = [context];
		var done = [];
		var last = null;
	
		while ( t.length &gt; 0 &amp;&amp; last != t ) {
			var r = [];
			last = t;
	
			t = jQuery.trim(t).replace( /^\/\//i, "" );
			
			var foundToken = false;
			
			for ( var i = 0; i &lt; jQuery.token.length; i += 2 ) {
				var re = new RegExp("^(" + jQuery.token[i] + ")");
				var m = re.exec(t);
				
				if ( m ) {
					r = ret = jQuery.map( ret, jQuery.token[i+1] );
					t = jQuery.trim( t.replace( re, "" ) );
					foundToken = true;
				}
			}
			
			if ( !foundToken ) {
				if ( !t.indexOf(",") || !t.indexOf("|") ) {
					if ( ret[0] == context ) ret.shift();
					done = jQuery.merge( done, ret );
					r = ret = [context];
					t = " " + t.substr(1,t.length);
				} else {
					var re2 = /^([#.]?)([a-z0-9\\*_-]*)/i;
					var m = re2.exec(t);
		
					if ( m[1] == "#" ) {
						// Ummm, should make this work in all XML docs
						var oid = document.getElementById(m[2]);
						r = ret = oid ? [oid] : [];
						t = t.replace( re2, "" );
					} else {
						if ( !m[2] || m[1] == "." ) m[2] = "*";
		
						for ( var i = 0; i &lt; ret.length; i++ )
							r = jQuery.merge( r,
								m[2] == "*" ?
									jQuery.getAll(ret[i]) :
									ret[i].getElementsByTagName(m[2])
							);
					}
				}
			}
	
			if ( t ) {
				var val = jQuery.filter(t,r);
				ret = r = val.r;
				t = jQuery.trim(val.t);
			}
		}
	
		if ( ret &amp;&amp; ret[0] == context ) ret.shift();
		done = jQuery.merge( done, ret );
	
		return done;
	},
	
	getAll: function(o,r) {
		r = r || [];
		var s = o.childNodes;
		for ( var i = 0; i &lt; s.length; i++ )
			if ( s[i].nodeType == 1 ) {
				r.push( s[i] );
				jQuery.getAll( s[i], r );
			}
		return r;
	},
	
	attr: function(elem, name, value){
		var fix = {
			"for": "htmlFor",
			"class": "className",
			"float": "cssFloat",
			innerHTML: "innerHTML",
			className: "className"
		};

		if ( fix[name] ) {
			if ( value != undefined ) elem[fix[name]] = value;
			return elem[fix[name]];
		} else if ( elem.getAttribute ) {
			if ( value != undefined ) elem.setAttribute( name, value );
			return elem.getAttribute( name, 2 );
		} else {
			name = name.replace(/-([a-z])/ig,function(z,b){return b.toUpperCase();});
			if ( value != undefined ) elem[name] = value;
			return elem[name];
		}
	},

	// The regular expressions that power the parsing engine
	parse: [
		// Match: [@value='test'], [@foo]
		[ "\\[ *(@)S *([!*$^=]*) *Q\\]", 1 ],

		// Match: [div], [div p]
		[ "(\\[)Q\\]", 0 ],

		// Match: :contains('foo')
		[ "(:)S\\(Q\\)", 0 ],

		// Match: :even, :last-chlid
		[ "([:.#]*)S", 0 ]
	],
	
	filter: function(t,r,not) {
		// Figure out if we're doing regular, or inverse, filtering
		var g = not !== false ? jQuery.grep :
			function(a,f) {return jQuery.grep(a,f,true);};
		
		while ( t &amp;&amp; /^[a-z[({&lt;*:.#]/i.test(t) ) {

			var p = jQuery.parse;

			for ( var i = 0; i &lt; p.length; i++ ) {
				var re = new RegExp( "^" + p[i][0]

					// Look for a string-like sequence
					.replace( 'S', "([a-z*_-][a-z0-9_-]*)" )

					// Look for something (optionally) enclosed with quotes
					.replace( 'Q', " *'?\"?([^'\"]*?)'?\"? *" ), "i" );

				var m = re.exec( t );

				if ( m ) {
					// Re-organize the match
					if ( p[i][1] )
						m = ["", m[1], m[3], m[2], m[4]];

					// Remove what we just matched
					t = t.replace( re, "" );

					break;
				}
			}
	
			// :not() is a special case that can be optomized by
			// keeping it out of the expression list
			if ( m[1] == ":" &amp;&amp; m[2] == "not" )
				r = jQuery.filter(m[3],r,false).r;
			
			// Otherwise, find the expression to execute
			else {
				var f = jQuery.expr[m[1]];
				if ( f.constructor != String )
					f = jQuery.expr[m[1]][m[2]];
					
				// Build a custom macro to enclose it
				eval("f = function(a,i){" + 
					( m[1] == "@" ? "z=jQuery.attr(a,m[3]);" : "" ) + 
					"return " + f + "}");
				
				// Execute it against the current filter
				r = g( r, f );
			}
		}
	
		// Return an array of filtered elements (r)
		// and the modified expression string (t)
		return { r: r, t: t };
	},
	
	/**
	 * Remove the whitespace from the beginning and end of a string.
	 *
	 * @private
	 * @name jQuery.trim
	 * @type String
	 * @param String str The string to trim.
	 */
	trim: function(t){
		return t.replace(/^\s+|\s+$/g, "");
	},
	
	/**
	 * All ancestors of a given element.
	 *
	 * @private
	 * @name jQuery.parents
	 * @type Array&lt;Element&gt;
	 * @param Element elem The element to find the ancestors of.
	 */
	parents: function( elem ){
		var matched = [];
		var cur = elem.parentNode;
		while ( cur &amp;&amp; cur != document ) {
			matched.push( cur );
			cur = cur.parentNode;
		}
		return matched;
	},
	
	/**
	 * All elements on a specified axis.
	 *
	 * @private
	 * @name jQuery.sibling
	 * @type Array
	 * @param Element elem The element to find all the siblings of (including itself).
	 */
	sibling: function(elem, pos, not) {
		var elems = [];

		var siblings = elem.parentNode.childNodes;
		for ( var i = 0; i &lt; siblings.length; i++ ) {
			if ( not === true &amp;&amp; siblings[i] == elem ) continue;

			if ( siblings[i].nodeType == 1 )
				elems.push( siblings[i] );
			if ( siblings[i] == elem )
				elems.n = elems.length - 1;
		}

		return jQuery.extend( elems, {
			last: elems.n == elems.length - 1,
			cur: pos == "even" &amp;&amp; elems.n % 2 == 0 || pos == "odd" &amp;&amp; elems.n % 2 || elems[pos] == elem,
			prev: elems[elems.n - 1],
			next: elems[elems.n + 1]
		});
	},
	
	/**
	 * Merge two arrays together, removing all duplicates.
	 *
	 * @private
	 * @name jQuery.merge
	 * @type Array
	 * @param Array a The first array to merge.
	 * @param Array b The second array to merge.
	 */
	merge: function(first, second) {
		var result = [];
		
		// Move b over to the new array (this helps to avoid
		// StaticNodeList instances)
		for ( var k = 0; k &lt; first.length; k++ )
			result[k] = first[k];
	
		// Now check for duplicates between a and b and only
		// add the unique items
		for ( var i = 0; i &lt; second.length; i++ ) {
			var noCollision = true;
			
			// The collision-checking process
			for ( var j = 0; j &lt; first.length; j++ )
				if ( second[i] == first[j] )
					noCollision = false;
				
			// If the item is unique, add it
			if ( noCollision )
				result.push( second[i] );
		}
	
		return result;
	},
	
	/**
	 * Remove items that aren't matched in an array. The function passed
	 * in to this method will be passed two arguments: 'a' (which is the
	 * array item) and 'i' (which is the index of the item in the array).
	 *
	 * @private
	 * @name jQuery.grep
	 * @type Array
	 * @param Array array The Array to find items in.
	 * @param Function fn The function to process each item against.
	 * @param Boolean inv Invert the selection - select the opposite of the function.
	 */
	grep: function(elems, fn, inv) {
		// If a string is passed in for the function, make a function
		// for it (a handy shortcut)
		if ( fn.constructor == String )
			fn = new Function("a","i","return " + fn);
			
		var result = [];
		
		// Go through the array, only saving the items
		// that pass the validator function
		for ( var i = 0; i &lt; elems.length; i++ )
			if ( !inv &amp;&amp; fn(elems[i],i) || inv &amp;&amp; !fn(elems[i],i) )
				result.push( elems[i] );
		
		return result;
	},
	
	/**
	 * Translate all items in array to another array of items. The translation function
	 * that is provided to this method is passed one argument: 'a' (the item to be 
	 * translated). If an array is returned, that array is mapped out and merged into
	 * the full array. Additionally, returning 'null' or 'undefined' will delete the item
	 * from the array. Both of these changes imply that the size of the array may not
	 * be the same size upon completion, as it was when it started.
	 *
	 * @private
	 * @name jQuery.map
	 * @type Array
	 * @param Array array The Array to translate.
	 * @param Function fn The function to process each item against.
	 */
	map: function(elems, fn) {
		// If a string is passed in for the function, make a function
		// for it (a handy shortcut)
		if ( fn.constructor == String )
			fn = new Function("a","return " + fn);
		
		var result = [];
		
		// Go through the array, translating each of the items to their
		// new value (or values).
		for ( var i = 0; i &lt; elems.length; i++ ) {
			var val = fn(elems[i],i);

			if ( val !== null &amp;&amp; val != undefined ) {
				if ( val.constructor != Array ) val = [val];
				result = jQuery.merge( result, val );
			}
		}

		return result;
	},
	
	/*
	 * A number of helper functions used for managing events.
	 * Many of the ideas behind this code orignated from Dean Edwards' addEvent library.
	 */
	event: {
	
		// Bind an event to an element
		// Original by Dean Edwards
		add: function(element, type, handler) {
			// For whatever reason, IE has trouble passing the window object
			// around, causing it to be cloned in the process
			if ( jQuery.browser.msie &amp;&amp; element.setInterval != undefined )
				element = window;
		
			// Make sure that the function being executed has a unique ID
			if ( !handler.guid )
				handler.guid = this.guid++;
				
			// Init the element's event structure
			if (!element.events)
				element.events = {};
			
			// Get the current list of functions bound to this event
			var handlers = element.events[type];
			
			// If it hasn't been initialized yet
			if (!handlers) {
				// Init the event handler queue
				handlers = element.events[type] = {};
				
				// Remember an existing handler, if it's already there
				if (element["on" + type])
					handlers[0] = element["on" + type];
			}

			// Add the function to the element's handler list
			handlers[handler.guid] = handler;
			
			// And bind the global event handler to the element
			element["on" + type] = this.handle;
	
			// Remember the function in a global list (for triggering)
			if (!this.global[type])
				this.global[type] = [];
			this.global[type].push( element );
		},
		
		guid: 1,
		global: {},
		
		// Detach an event or set of events from an element
		remove: function(element, type, handler) {
			if (element.events)
				if (type &amp;&amp; element.events[type])
					if ( handler )
						delete element.events[type][handler.guid];
					else
						for ( var i in element.events[type] )
							delete element.events[type][i];
				else
					for ( var j in element.events )
						this.remove( element, j );
		},
		
		trigger: function(type,data,element) {
			// Touch up the incoming data
			data = data || [];
	
			// Handle a global trigger
			if ( !element ) {
				var g = this.global[type];
				if ( g )
					for ( var i = 0; i &lt; g.length; i++ )
						this.trigger( type, data, g[i] );
	
			// Handle triggering a single element
			} else if ( element["on" + type] ) {
				// Pass along a fake event
				data.unshift( this.fix({ type: type, target: element }) );
	
				// Trigger the event
				element["on" + type].apply( element, data );
			}
		},
		
		handle: function(event) {
			if ( typeof jQuery == "undefined" ) return;

			event = event || jQuery.event.fix( window.event );
	
			// If no correct event was found, fail
			if ( !event ) return;
		
			var returnValue = true;

			var c = this.events[event.type];
		
			for ( var j in c ) {
				if ( c[j].apply( this, [event] ) === false ) {
					event.preventDefault();
					event.stopPropagation();
					returnValue = false;
				}
			}
			
			return returnValue;
		},
		
		fix: function(event) {
			if ( event ) {
				event.preventDefault = function() {
					this.returnValue = false;
				};
			
				event.stopPropagation = function() {
					this.cancelBubble = true;
				};
			}
			
			return event;
		}
	
	}
});

new function() {
	var b = navigator.userAgent.toLowerCase();

	// Figure out what browser is being used
	jQuery.browser = {
		safari: /webkit/.test(b),
		opera: /opera/.test(b),
		msie: /msie/.test(b) &amp;&amp; !/opera/.test(b),
		mozilla: /mozilla/.test(b) &amp;&amp; !/compatible/.test(b)
	};

	// Check to see if the W3C box model is being used
	jQuery.boxModel = !jQuery.browser.msie || document.compatMode == "CSS1Compat";
};

jQuery.macros = {
	to: {
		/**
		 * Append all of the matched elements to another, specified, set of elements.
		 * This operation is, essentially, the reverse of doing a regular
		 * $(A).append(B), in that instead of appending B to A, you're appending
		 * A to B.
		 * 
		 * @example $("p").appendTo("#foo");
		 * @before &lt;p&gt;I would like to say: &lt;/p&gt;&lt;div id="foo"&gt;&lt;/div&gt;
		 * @result &lt;div id="foo"&gt;&lt;p&gt;I would like to say: &lt;/p&gt;&lt;/div&gt;
		 *
		 * @name appendTo
		 * @type jQuery
		 * @param String expr A jQuery expression of elements to match.
		 * @cat DOM/Manipulation
		 */
		appendTo: "append",
		
		/**
		 * Prepend all of the matched elements to another, specified, set of elements.
		 * This operation is, essentially, the reverse of doing a regular
		 * $(A).prepend(B), in that instead of prepending B to A, you're prepending
		 * A to B.
		 * 
		 * @example $("p").prependTo("#foo");
		 * @before &lt;p&gt;I would like to say: &lt;/p&gt;&lt;div id="foo"&gt;&lt;b&gt;Hello&lt;/b&gt;&lt;/div&gt;
		 * @result &lt;div id="foo"&gt;&lt;p&gt;I would like to say: &lt;/p&gt;&lt;b&gt;Hello&lt;/b&gt;&lt;/div&gt;
		 *
		 * @name prependTo
		 * @type jQuery
		 * @param String expr A jQuery expression of elements to match.
		 * @cat DOM/Manipulation
		 */
		prependTo: "prepend",
		
		/**
		 * Insert all of the matched elements before another, specified, set of elements.
		 * This operation is, essentially, the reverse of doing a regular
		 * $(A).before(B), in that instead of inserting B before A, you're inserting
		 * A before B.
		 * 
		 * @example $("p").insertBefore("#foo");
		 * @before &lt;div id="foo"&gt;Hello&lt;/div&gt;&lt;p&gt;I would like to say: &lt;/p&gt;
		 * @result &lt;p&gt;I would like to say: &lt;/p&gt;&lt;div id="foo"&gt;Hello&lt;/div&gt;
		 *
		 * @name insertBefore
		 * @type jQuery
		 * @param String expr A jQuery expression of elements to match.
		 * @cat DOM/Manipulation
		 */
		insertBefore: "before",
		
		/**
		 * Insert all of the matched elements after another, specified, set of elements.
		 * This operation is, essentially, the reverse of doing a regular
		 * $(A).after(B), in that instead of inserting B after A, you're inserting
		 * A after B.
		 * 
		 * @example $("p").insertAfter("#foo");
		 * @before &lt;p&gt;I would like to say: &lt;/p&gt;&lt;div id="foo"&gt;Hello&lt;/div&gt;
		 * @result &lt;div id="foo"&gt;Hello&lt;/div&gt;&lt;p&gt;I would like to say: &lt;/p&gt;
		 *
		 * @name insertAfter
		 * @type jQuery
		 * @param String expr A jQuery expression of elements to match.
		 * @cat DOM/Manipulation
		 */
		insertAfter: "after"
	},
	
	/**
	 * Get the current CSS width of the first matched element.
	 * 
	 * @example $("p").width();
	 * @before &lt;p&gt;This is just a test.&lt;/p&gt;
	 * @result "300px"
	 *
	 * @name width
	 * @type String
	 * @cat CSS
	 */
	 
	/**
	 * Set the CSS width of every matched element. Be sure to include
	 * the "px" (or other unit of measurement) after the number that you 
	 * specify, otherwise you might get strange results.
	 * 
	 * @example $("p").width("20px");
	 * @before &lt;p&gt;This is just a test.&lt;/p&gt;
	 * @result &lt;p style="width:20px;"&gt;This is just a test.&lt;/p&gt;
	 *
	 * @name width
	 * @type jQuery
	 * @param String val Set the CSS property to the specified value.
	 * @cat CSS
	 */
	
	/**
	 * Get the current CSS height of the first matched element.
	 * 
	 * @example $("p").height();
	 * @before &lt;p&gt;This is just a test.&lt;/p&gt;
	 * @result "14px"
	 *
	 * @name height
	 * @type String
	 * @cat CSS
	 */
	 
	/**
	 * Set the CSS height of every matched element. Be sure to include
	 * the "px" (or other unit of measurement) after the number that you 
	 * specify, otherwise you might get strange results.
	 * 
	 * @example $("p").height("20px");
	 * @before &lt;p&gt;This is just a test.&lt;/p&gt;
	 * @result &lt;p style="height:20px;"&gt;This is just a test.&lt;/p&gt;
	 *
	 * @name height
	 * @type jQuery
	 * @param String val Set the CSS property to the specified value.
	 * @cat CSS
	 */
	 
	/**
	 * Get the current CSS top of the first matched element.
	 * 
	 * @example $("p").top();
	 * @before &lt;p&gt;This is just a test.&lt;/p&gt;
	 * @result "0px"
	 *
	 * @name top
	 * @type String
	 * @cat CSS
	 */
	 
	/**
	 * Set the CSS top of every matched element. Be sure to include
	 * the "px" (or other unit of measurement) after the number that you 
	 * specify, otherwise you might get strange results.
	 * 
	 * @example $("p").top("20px");
	 * @before &lt;p&gt;This is just a test.&lt;/p&gt;
	 * @result &lt;p style="top:20px;"&gt;This is just a test.&lt;/p&gt;
	 *
	 * @name top
	 * @type jQuery
	 * @param String val Set the CSS property to the specified value.
	 * @cat CSS
	 */
	 
	/**
	 * Get the current CSS left of the first matched element.
	 * 
	 * @example $("p").left();
	 * @before &lt;p&gt;This is just a test.&lt;/p&gt;
	 * @result "0px"
	 *
	 * @name left
	 * @type String
	 * @cat CSS
	 */
	 
	/**
	 * Set the CSS left of every matched element. Be sure to include
	 * the "px" (or other unit of measurement) after the number that you 
	 * specify, otherwise you might get strange results.
	 * 
	 * @example $("p").left("20px");
	 * @before &lt;p&gt;This is just a test.&lt;/p&gt;
	 * @result &lt;p style="left:20px;"&gt;This is just a test.&lt;/p&gt;
	 *
	 * @name left
	 * @type jQuery
	 * @param String val Set the CSS property to the specified value.
	 * @cat CSS
	 */
	 
	/**
	 * Get the current CSS position of the first matched element.
	 * 
	 * @example $("p").position();
	 * @before &lt;p&gt;This is just a test.&lt;/p&gt;
	 * @result "static"
	 *
	 * @name position
	 * @type String
	 * @cat CSS
	 */
	 
	/**
	 * Set the CSS position of every matched element.
	 * 
	 * @example $("p").position("relative");
	 * @before &lt;p&gt;This is just a test.&lt;/p&gt;
	 * @result &lt;p style="position:relative;"&gt;This is just a test.&lt;/p&gt;
	 *
	 * @name position
	 * @type jQuery
	 * @param String val Set the CSS property to the specified value.
	 * @cat CSS
	 */
	 
	/**
	 * Get the current CSS float of the first matched element.
	 * 
	 * @example $("p").float();
	 * @before &lt;p&gt;This is just a test.&lt;/p&gt;
	 * @result "none"
	 *
	 * @name float
	 * @type String
	 * @cat CSS
	 */
	 
	/**
	 * Set the CSS float of every matched element.
	 * 
	 * @example $("p").float("left");
	 * @before &lt;p&gt;This is just a test.&lt;/p&gt;
	 * @result &lt;p style="float:left;"&gt;This is just a test.&lt;/p&gt;
	 *
	 * @name float
	 * @type jQuery
	 * @param String val Set the CSS property to the specified value.
	 * @cat CSS
	 */
	 
	/**
	 * Get the current CSS overflow of the first matched element.
	 * 
	 * @example $("p").overflow();
	 * @before &lt;p&gt;This is just a test.&lt;/p&gt;
	 * @result "none"
	 *
	 * @name overflow
	 * @type String
	 * @cat CSS
	 */
	 
	/**
	 * Set the CSS overflow of every matched element.
	 * 
	 * @example $("p").overflow("auto");
	 * @before &lt;p&gt;This is just a test.&lt;/p&gt;
	 * @result &lt;p style="overflow:auto;"&gt;This is just a test.&lt;/p&gt;
	 *
	 * @name overflow
	 * @type jQuery
	 * @param String val Set the CSS property to the specified value.
	 * @cat CSS
	 */
	 
	/**
	 * Get the current CSS color of the first matched element.
	 * 
	 * @example $("p").color();
	 * @before &lt;p&gt;This is just a test.&lt;/p&gt;
	 * @result "black"
	 *
	 * @name color
	 * @type String
	 * @cat CSS
	 */
	 
	/**
	 * Set the CSS color of every matched element.
	 * 
	 * @example $("p").color("blue");
	 * @before &lt;p&gt;This is just a test.&lt;/p&gt;
	 * @result &lt;p style="color:blue;"&gt;This is just a test.&lt;/p&gt;
	 *
	 * @name color
	 * @type jQuery
	 * @param String val Set the CSS property to the specified value.
	 * @cat CSS
	 */
	 
	/**
	 * Get the current CSS background of the first matched element.
	 * 
	 * @example $("p").background();
	 * @before &lt;p&gt;This is just a test.&lt;/p&gt;
	 * @result ""
	 *
	 * @name background
	 * @type String
	 * @cat CSS
	 */
	 
	/**
	 * Set the CSS background of every matched element.
	 * 
	 * @example $("p").background("blue");
	 * @before &lt;p&gt;This is just a test.&lt;/p&gt;
	 * @result &lt;p style="background:blue;"&gt;This is just a test.&lt;/p&gt;
	 *
	 * @name background
	 * @type jQuery
	 * @param String val Set the CSS property to the specified value.
	 * @cat CSS
	 */
	
	css: "width,height,top,left,position,float,overflow,color,background".split(","),

	filter: [ "eq", "lt", "gt", "contains" ],

	attr: {
		/**
		 * Get the current value of the first matched element.
		 * 
		 * @example $("input").val();
		 * @before &lt;input type="text" value="some text"/&gt;
		 * @result "some text"
		 *
		 * @name val
		 * @type String
		 * @cat DOM/Attributes
		 */
		 
		/**
		 * Set the value of every matched element.
		 * 
		 * @example $("input").value("test");
		 * @before &lt;input type="text" value="some text"/&gt;
		 * @result &lt;input type="text" value="test"/&gt;
		 *
		 * @name val
		 * @type jQuery
		 * @param String val Set the property to the specified value.
		 * @cat DOM/Attributes
		 */
		val: "value",
		
		/**
		 * Get the html contents of the first matched element.
		 * 
		 * @example $("div").html();
		 * @before &lt;div&gt;&lt;input/&gt;&lt;/div&gt;
		 * @result &lt;input/&gt;
		 *
		 * @name html
		 * @type String
		 * @cat DOM/Attributes
		 */
		 
		/**
		 * Set the html contents of every matched element.
		 * 
		 * @example $("div").html("&lt;b&gt;new stuff&lt;/b&gt;");
		 * @before &lt;div&gt;&lt;input/&gt;&lt;/div&gt;
		 * @result &lt;div&gt;&lt;b&gt;new stuff&lt;/b&gt;&lt;/div&gt;
		 *
		 * @test var div = $("div");
		 * div.html("&lt;b&gt;test&lt;/b&gt;");
		 * var pass = true;
		 * for ( var i = 0; i &lt; div.size(); i++ ) {
		 *   if ( div.get(i).childNodes.length == 0 ) pass = false;
		 * }
		 * ok( pass, "Set HTML" );
		 *
		 * @name html
		 * @type jQuery
		 * @param String val Set the html contents to the specified value.
		 * @cat DOM/Attributes
		 */
		html: "innerHTML",
		
		/**
		 * Get the current id of the first matched element.
		 * 
		 * @example $("input").id();
		 * @before &lt;input type="text" id="test" value="some text"/&gt;
		 * @result "test"
		 *
		 * @name id
		 * @type String
		 * @cat DOM/Attributes
		 */
		 
		/**
		 * Set the id of every matched element.
		 * 
		 * @example $("input").id("newid");
		 * @before &lt;input type="text" id="test" value="some text"/&gt;
		 * @result &lt;input type="text" id="newid" value="some text"/&gt;
		 *
		 * @name id
		 * @type jQuery
		 * @param String val Set the property to the specified value.
		 * @cat DOM/Attributes
		 */
		id: null,
		
		/**
		 * Get the current title of the first matched element.
		 * 
		 * @example $("img").title();
		 * @before &lt;img src="test.jpg" title="my image"/&gt;
		 * @result "my image"
		 *
		 * @name title
		 * @type String
		 * @cat DOM/Attributes
		 */
		 
		/**
		 * Set the title of every matched element.
		 * 
		 * @example $("img").title("new title");
		 * @before &lt;img src="test.jpg" title="my image"/&gt;
		 * @result &lt;img src="test.jpg" title="new image"/&gt;
		 *
		 * @name title
		 * @type jQuery
		 * @param String val Set the property to the specified value.
		 * @cat DOM/Attributes
		 */
		title: null,
		
		/**
		 * Get the current name of the first matched element.
		 * 
		 * @example $("input").name();
		 * @before &lt;input type="text" name="username"/&gt;
		 * @result "username"
		 *
		 * @name name
		 * @type String
		 * @cat DOM/Attributes
		 */
		 
		/**
		 * Set the name of every matched element.
		 * 
		 * @example $("input").name("user");
		 * @before &lt;input type="text" name="username"/&gt;
		 * @result &lt;input type="text" name="user"/&gt;
		 *
		 * @name name
		 * @type jQuery
		 * @param String val Set the property to the specified value.
		 * @cat DOM/Attributes
		 */
		name: null,
		
		/**
		 * Get the current href of the first matched element.
		 * 
		 * @example $("a").href();
		 * @before &lt;a href="test.html"&gt;my link&lt;/a&gt;
		 * @result "test.html"
		 *
		 * @name href
		 * @type String
		 * @cat DOM/Attributes
		 */
		 
		/**
		 * Set the href of every matched element.
		 * 
		 * @example $("a").href("test2.html");
		 * @before &lt;a href="test.html"&gt;my link&lt;/a&gt;
		 * @result &lt;a href="test2.html"&gt;my link&lt;/a&gt;
		 *
		 * @name href
		 * @type jQuery
		 * @param String val Set the property to the specified value.
		 * @cat DOM/Attributes
		 */
		href: null,
		
		/**
		 * Get the current src of the first matched element.
		 * 
		 * @example $("img").src();
		 * @before &lt;img src="test.jpg" title="my image"/&gt;
		 * @result "test.jpg"
		 *
		 * @name src
		 * @type String
		 * @cat DOM/Attributes
		 */
		 
		/**
		 * Set the src of every matched element.
		 * 
		 * @example $("img").src("test2.jpg");
		 * @before &lt;img src="test.jpg" title="my image"/&gt;
		 * @result &lt;img src="test2.jpg" title="my image"/&gt;
		 *
		 * @name src
		 * @type jQuery
		 * @param String val Set the property to the specified value.
		 * @cat DOM/Attributes
		 */
		src: null,
		
		/**
		 * Get the current rel of the first matched element.
		 * 
		 * @example $("a").rel();
		 * @before &lt;a href="test.html" rel="nofollow"&gt;my link&lt;/a&gt;
		 * @result "nofollow"
		 *
		 * @name rel
		 * @type String
		 * @cat DOM/Attributes
		 */
		 
		/**
		 * Set the rel of every matched element.
		 * 
		 * @example $("a").rel("nofollow");
		 * @before &lt;a href="test.html"&gt;my link&lt;/a&gt;
		 * @result &lt;a href="test.html" rel="nofollow"&gt;my link&lt;/a&gt;
		 *
		 * @name rel
		 * @type jQuery
		 * @param String val Set the property to the specified value.
		 * @cat DOM/Attributes
		 */
		rel: null
	},
	
	axis: {
		/**
		 * Get a set of elements containing the unique parents of the matched
		 * set of elements.
		 *
		 * @example $("p").parent()
		 * @before &lt;div&gt;&lt;p&gt;Hello&lt;/p&gt;&lt;p&gt;Hello&lt;/p&gt;&lt;/div&gt;
		 * @result [ &lt;div&gt;&lt;p&gt;Hello&lt;/p&gt;&lt;p&gt;Hello&lt;/p&gt;&lt;/div&gt; ]
		 *
		 * @name parent
		 * @type jQuery
		 * @cat DOM/Traversing
		 */

		/**
		 * Get a set of elements containing the unique parents of the matched
		 * set of elements, and filtered by an expression.
		 *
		 * @example $("p").parent(".selected")
		 * @before &lt;div&gt;&lt;p&gt;Hello&lt;/p&gt;&lt;/div&gt;&lt;div class="selected"&gt;&lt;p&gt;Hello Again&lt;/p&gt;&lt;/div&gt;
		 * @result [ &lt;div class="selected"&gt;&lt;p&gt;Hello Again&lt;/p&gt;&lt;/div&gt; ]
		 *
		 * @name parent
		 * @type jQuery
		 * @param String expr An expression to filter the parents with
		 * @cat DOM/Traversing
		 */
		parent: "a.parentNode",

		/**
		 * Get a set of elements containing the unique ancestors of the matched
		 * set of elements.
		 *
		 * @example $("span").ancestors()
		 * @before &lt;html&gt;&lt;body&gt;&lt;div&gt;&lt;p&gt;&lt;span&gt;Hello&lt;/span&gt;&lt;/p&gt;&lt;span&gt;Hello Again&lt;/span&gt;&lt;/div&gt;&lt;/body&gt;&lt;/html&gt;
		 * @result [ &lt;body&gt;...&lt;/body&gt;, &lt;div&gt;...&lt;/div&gt;, &lt;p&gt;&lt;span&gt;Hello&lt;/span&gt;&lt;/p&gt; ] 
		 *
		 * @name ancestors
		 * @type jQuery
		 * @cat DOM/Traversing
		 */

		/**
		 * Get a set of elements containing the unique ancestors of the matched
		 * set of elements, and filtered by an expression.
		 *
		 * @example $("span").ancestors("p")
		 * @before &lt;html&gt;&lt;body&gt;&lt;div&gt;&lt;p&gt;&lt;span&gt;Hello&lt;/span&gt;&lt;/p&gt;&lt;span&gt;Hello Again&lt;/span&gt;&lt;/div&gt;&lt;/body&gt;&lt;/html&gt;
		 * @result [ &lt;p&gt;&lt;span&gt;Hello&lt;/span&gt;&lt;/p&gt; ] 
		 *
		 * @name ancestors
		 * @type jQuery
		 * @param String expr An expression to filter the ancestors with
		 * @cat DOM/Traversing
		 */
		ancestors: jQuery.parents,
		
		/**
		 * Get a set of elements containing the unique ancestors of the matched
		 * set of elements.
		 *
		 * @example $("span").ancestors()
		 * @before &lt;html&gt;&lt;body&gt;&lt;div&gt;&lt;p&gt;&lt;span&gt;Hello&lt;/span&gt;&lt;/p&gt;&lt;span&gt;Hello Again&lt;/span&gt;&lt;/div&gt;&lt;/body&gt;&lt;/html&gt;
		 * @result [ &lt;body&gt;...&lt;/body&gt;, &lt;div&gt;...&lt;/div&gt;, &lt;p&gt;&lt;span&gt;Hello&lt;/span&gt;&lt;/p&gt; ] 
		 *
		 * @name parents
		 * @type jQuery
		 * @cat DOM/Traversing
		 */

		/**
		 * Get a set of elements containing the unique ancestors of the matched
		 * set of elements, and filtered by an expression.
		 *
		 * @example $("span").ancestors("p")
		 * @before &lt;html&gt;&lt;body&gt;&lt;div&gt;&lt;p&gt;&lt;span&gt;Hello&lt;/span&gt;&lt;/p&gt;&lt;span&gt;Hello Again&lt;/span&gt;&lt;/div&gt;&lt;/body&gt;&lt;/html&gt;
		 * @result [ &lt;p&gt;&lt;span&gt;Hello&lt;/span&gt;&lt;/p&gt; ] 
		 *
		 * @name parents
		 * @type jQuery
		 * @param String expr An expression to filter the ancestors with
		 * @cat DOM/Traversing
		 */
		parents: jQuery.parents,

		/**
		 * Get a set of elements containing the unique next siblings of each of the 
		 * matched set of elements.
		 * 
		 * It only returns the very next sibling, not all next siblings.
		 *
		 * @example $("p").next()
		 * @before &lt;p&gt;Hello&lt;/p&gt;&lt;p&gt;Hello Again&lt;/p&gt;&lt;div&gt;&lt;span&gt;And Again&lt;/span&gt;&lt;/div&gt;
		 * @result [ &lt;p&gt;Hello Again&lt;/p&gt;, &lt;div&gt;&lt;span&gt;And Again&lt;/span&gt;&lt;/div&gt; ]
		 *
		 * @name next
		 * @type jQuery
		 * @cat DOM/Traversing
		 */

		/**
		 * Get a set of elements containing the unique next siblings of each of the 
		 * matched set of elements, and filtered by an expression.
		 * 
		 * It only returns the very next sibling, not all next siblings.
		 *
		 * @example $("p").next(".selected")
		 * @before &lt;p&gt;Hello&lt;/p&gt;&lt;p class="selected"&gt;Hello Again&lt;/p&gt;&lt;div&gt;&lt;span&gt;And Again&lt;/span&gt;&lt;/div&gt;
		 * @result [ &lt;p class="selected"&gt;Hello Again&lt;/p&gt; ]
		 *
		 * @name next
		 * @type jQuery
		 * @param String expr An expression to filter the next Elements with
		 * @cat DOM/Traversing
		 */
		next: "jQuery.sibling(a).next",

		/**
		 * Get a set of elements containing the unique previous siblings of each of the 
		 * matched set of elements.
		 * 
		 * It only returns the immediately previous sibling, not all previous siblings.
		 *
		 * @example $("p").previous()
		 * @before &lt;p&gt;Hello&lt;/p&gt;&lt;div&gt;&lt;span&gt;Hello Again&lt;/span&gt;&lt;/div&gt;&lt;p&gt;And Again&lt;/p&gt;
		 * @result [ &lt;div&gt;&lt;span&gt;Hello Again&lt;/span&gt;&lt;/div&gt; ]
		 *
		 * @name prev
		 * @type jQuery
		 * @cat DOM/Traversing
		 */

		/**
		 * Get a set of elements containing the unique previous siblings of each of the 
		 * matched set of elements, and filtered by an expression.
		 * 
		 * It only returns the immediately previous sibling, not all previous siblings.
		 *
		 * @example $("p").previous(".selected")
		 * @before &lt;div&gt;&lt;span&gt;Hello&lt;/span&gt;&lt;/div&gt;&lt;p class="selected"&gt;Hello Again&lt;/p&gt;&lt;p&gt;And Again&lt;/p&gt;
		 * @result [ &lt;div&gt;&lt;span&gt;Hello&lt;/span&gt;&lt;/div&gt; ]
		 *
		 * @name prev
		 * @type jQuery
		 * @param String expr An expression to filter the previous Elements with
		 * @cat DOM/Traversing
		 */
		prev: "jQuery.sibling(a).prev",

		/**
		 * Get a set of elements containing all of the unique siblings of each of the 
		 * matched set of elements.
		 * 
		 * @example $("div").siblings()
		 * @before &lt;p&gt;Hello&lt;/p&gt;&lt;div&gt;&lt;span&gt;Hello Again&lt;/span&gt;&lt;/div&gt;&lt;p&gt;And Again&lt;/p&gt;
		 * @result [ &lt;p&gt;Hello&lt;/p&gt;, &lt;p&gt;And Again&lt;/p&gt; ]
		 *
		 * @name siblings
		 * @type jQuery
		 * @cat DOM/Traversing
		 */

		/**
		 * Get a set of elements containing all of the unique siblings of each of the 
		 * matched set of elements, and filtered by an expression.
		 *
		 * @example $("div").siblings(".selected")
		 * @before &lt;div&gt;&lt;span&gt;Hello&lt;/span&gt;&lt;/div&gt;&lt;p class="selected"&gt;Hello Again&lt;/p&gt;&lt;p&gt;And Again&lt;/p&gt;
		 * @result [ &lt;p class="selected"&gt;Hello Again&lt;/p&gt; ]
		 *
		 * @name siblings
		 * @type jQuery
		 * @param String expr An expression to filter the sibling Elements with
		 * @cat DOM/Traversing
		 */
		siblings: jQuery.sibling,
		
		
		/**
		 * Get a set of elements containing all of the unique children of each of the 
		 * matched set of elements.
		 * 
		 * @example $("div").children()
		 * @before &lt;p&gt;Hello&lt;/p&gt;&lt;div&gt;&lt;span&gt;Hello Again&lt;/span&gt;&lt;/div&gt;&lt;p&gt;And Again&lt;/p&gt;
		 * @result [ &lt;span&gt;Hello Again&lt;/span&gt; ]
		 *
		 * @name children
		 * @type jQuery
		 * @cat DOM/Traversing
		 */

		/**
		 * Get a set of elements containing all of the unique children of each of the 
		 * matched set of elements, and filtered by an expression.
		 *
		 * @example $("div").children(".selected")
		 * @before &lt;div&gt;&lt;span&gt;Hello&lt;/span&gt;&lt;p class="selected"&gt;Hello Again&lt;/p&gt;&lt;p&gt;And Again&lt;/p&gt;&lt;/div&gt;
		 * @result [ &lt;p class="selected"&gt;Hello Again&lt;/p&gt; ]
		 *
		 * @name children
		 * @type jQuery
		 * @param String expr An expression to filter the child Elements with
		 * @cat DOM/Traversing
		 */
		children: "a.childNodes"
	},

	each: {

		removeAttr: function( key ) {
			this.removeAttribute( key );
		},

		/**
		 * Displays each of the set of matched elements if they are hidden.
		 * 
		 * @example $("p").show()
		 * @before &lt;p style="display: none"&gt;Hello&lt;/p&gt;
		 * @result [ &lt;p style="display: block"&gt;Hello&lt;/p&gt; ]
		 *
		 * @test var pass = true, div = $("div");
		 * div.show().each(function(){
		 *   if ( this.style.display == "none" ) pass = false;
		 * });
		 * ok( pass, "Show" );
		 *
		 * @name show
		 * @type jQuery
		 * @cat Effects
		 */
		show: function(){
			this.style.display = this.oldblock ? this.oldblock : "";
			if ( jQuery.css(this,"display") == "none" )
				this.style.display = "block";
		},

		/**
		 * Hides each of the set of matched elements if they are shown.
		 *
		 * @example $("p").hide()
		 * @before &lt;p&gt;Hello&lt;/p&gt;
		 * @result [ &lt;p style="display: none"&gt;Hello&lt;/p&gt; ]
		 *
		 * var pass = true, div = $("div");
		 * div.hide().each(function(){
		 *   if ( this.style.display != "none" ) pass = false;
		 * });
		 * ok( pass, "Hide" );
		 *
		 * @name hide
		 * @type jQuery
		 * @cat Effects
		 */
		hide: function(){
			this.oldblock = this.oldblock || jQuery.css(this,"display");
			if ( this.oldblock == "none" )
				this.oldblock = "block";
			this.style.display = "none";
		},
		
		/**
		 * Toggles each of the set of matched elements. If they are shown,
		 * toggle makes them hidden. If they are hidden, toggle
		 * makes them shown.
		 *
		 * @example $("p").toggle()
		 * @before &lt;p&gt;Hello&lt;/p&gt;&lt;p style="display: none"&gt;Hello Again&lt;/p&gt;
		 * @result [ &lt;p style="display: none"&gt;Hello&lt;/p&gt;, &lt;p style="display: block"&gt;Hello Again&lt;/p&gt; ]
		 *
		 * @name toggle
		 * @type jQuery
		 * @cat Effects
		 */
		toggle: function(){
			$(this)[ $(this).is(":hidden") ? "show" : "hide" ].apply( $(this), arguments );
		},
		
		/**
		 * Adds the specified class to each of the set of matched elements.
		 *
		 * @example $("p").addClass("selected")
		 * @before &lt;p&gt;Hello&lt;/p&gt;
		 * @result [ &lt;p class="selected"&gt;Hello&lt;/p&gt; ]
		 *
		 * @test var div = $("div");
		 * div.addClass("test");
		 * var pass = true;
		 * for ( var i = 0; i &lt; div.size(); i++ ) {
		 *  if ( div.get(i).className.indexOf("test") == -1 ) pass = false;
		 * }
		 * ok( pass, "Add Class" );
		 * 
		 * @name addClass
		 * @type jQuery
		 * @param String class A CSS class to add to the elements
		 * @cat DOM
		 */
		addClass: function(c){
			jQuery.className.add(this,c);
		},
		
		/**
		 * Removes the specified class from the set of matched elements.
		 *
		 * @example $("p").removeClass("selected")
		 * @before &lt;p class="selected"&gt;Hello&lt;/p&gt;
		 * @result [ &lt;p&gt;Hello&lt;/p&gt; ]
		 *
		 * @test var div = $("div").addClass("test");
		 * div.removeClass("test");
		 * var pass = true;
		 * for ( var i = 0; i &lt; div.size(); i++ ) {
		 *  if ( div.get(i).className.indexOf("test") != -1 ) pass = false;
		 * }
		 * ok( pass, "Remove Class" );
		 *
		 * @name removeClass
		 * @type jQuery
		 * @param String class A CSS class to remove from the elements
		 * @cat DOM
		 */
		removeClass: function(c){
			jQuery.className.remove(this,c);
		},
	
		/**
		 * Adds the specified class if it is present, removes it if it is
		 * not present.
		 *
		 * @example $("p").toggleClass("selected")
		 * @before &lt;p&gt;Hello&lt;/p&gt;&lt;p class="selected"&gt;Hello Again&lt;/p&gt;
		 * @result [ &lt;p class="selected"&gt;Hello&lt;/p&gt;, &lt;p&gt;Hello Again&lt;/p&gt; ]
		 *
		 * @name toggleClass
		 * @type jQuery
		 * @param String class A CSS class with which to toggle the elements
		 * @cat DOM
		 */
		toggleClass: function( c ){
			jQuery.className[ jQuery.className.has(this,c) ? "remove" : "add" ](this,c);
		},
		
		/**
		 * Removes all matched elements from the DOM. This does NOT remove them from the
		 * jQuery object, allowing you to use the matched elements further.
		 *
		 * @example $("p").remove();
		 * @before &lt;p&gt;Hello&lt;/p&gt; how are &lt;p&gt;you?&lt;/p&gt;
		 * @result how are
		 *
		 * @name remove
		 * @type jQuery
		 * @cat DOM/Manipulation
		 */
		 
		/**
		 * Removes only elements (out of the list of matched elements) that match
		 * the specified jQuery expression. This does NOT remove them from the
		 * jQuery object, allowing you to use the matched elements further.
		 *
		 * @example $("p").remove(".hello");
		 * @before &lt;p class="hello"&gt;Hello&lt;/p&gt; how are &lt;p&gt;you?&lt;/p&gt;
		 * @result how are &lt;p&gt;you?&lt;/p&gt;
		 *
		 * @name remove
		 * @type jQuery
		 * @param String expr A jQuery expression to filter elements by.
		 * @cat DOM/Manipulation
		 */
		remove: function(a){
			if ( !a || jQuery.filter( [this], a ).r )
				this.parentNode.removeChild( this );
		},
	
		/**
		 * Removes all child nodes from the set of matched elements.
		 *
		 * @example $("p").empty()
		 * @before &lt;p&gt;Hello, &lt;span&gt;Person&lt;/span&gt; &lt;a href="#"&gt;and person&lt;/a&gt;&lt;/p&gt;
		 * @result [ &lt;p&gt;&lt;/p&gt; ]
		 *
		 * @name empty
		 * @type jQuery
		 * @cat DOM/Manipulation
		 */
		empty: function(){
			while ( this.firstChild )
				this.removeChild( this.firstChild );
		},
		
		/**
		 * Binds a particular event (like click) to a each of a set of match elements.
		 *
		 * @example $("p").bind( "click", function() { alert("Hello"); } )
		 * @before &lt;p&gt;Hello&lt;/p&gt;
		 * @result [ &lt;p&gt;Hello&lt;/p&gt; ]
		 *
		 * Cancel a default action and prevent it from bubbling by returning false
		 * from your function.
		 *
		 * @example $("form").bind( "submit", function() { return false; } )
		 *
		 * Cancel a default action by using the preventDefault method.
		 *
		 * @example $("form").bind( "submit", function() { e.preventDefault(); } )
		 *
		 * Stop an event from bubbling by using the stopPropogation method.
		 *
		 * @example $("form").bind( "submit", function() { e.stopPropogation(); } )
		 *
		 * @name bind
		 * @type jQuery
		 * @param String type An event type
		 * @param Function fn A function to bind to the event on each of the set of matched elements
		 * @cat Events
		 */
		bind: function( type, fn ) {
			if ( fn.constructor == String )
				fn = new Function("e", ( !fn.indexOf(".") ? "$(this)" : "return " ) + fn);
			jQuery.event.add( this, type, fn );
		},
		
		/**
		 * The opposite of bind, removes a bound event from each of the matched
		 * elements. You must pass the identical function that was used in the original 
		 * bind method.
		 *
		 * @example $("p").unbind( "click", function() { alert("Hello"); } )
		 * @before &lt;p onclick="alert('Hello');"&gt;Hello&lt;/p&gt;
		 * @result [ &lt;p&gt;Hello&lt;/p&gt; ]
		 *
		 * @name unbind
		 * @type jQuery
		 * @param String type An event type
		 * @param Function fn A function to unbind from the event on each of the set of matched elements
		 * @cat Events
		 */
		 
		/**
		 * Removes all bound events of a particular type from each of the matched
		 * elements.
		 *
		 * @example $("p").unbind( "click" )
		 * @before &lt;p onclick="alert('Hello');"&gt;Hello&lt;/p&gt;
		 * @result [ &lt;p&gt;Hello&lt;/p&gt; ]
		 *
		 * @name unbind
		 * @type jQuery
		 * @param String type An event type
		 * @cat Events
		 */
		 
		/**
		 * Removes all bound events from each of the matched elements.
		 *
		 * @example $("p").unbind()
		 * @before &lt;p onclick="alert('Hello');"&gt;Hello&lt;/p&gt;
		 * @result [ &lt;p&gt;Hello&lt;/p&gt; ]
		 *
		 * @name unbind
		 * @type jQuery
		 * @cat Events
		 */
		unbind: function( type, fn ) {
			jQuery.event.remove( this, type, fn );
		},
		
		/**
		 * Trigger a type of event on every matched element.
		 *
		 * @example $("p").trigger("click")
		 * @before &lt;p click="alert('hello')"&gt;Hello&lt;/p&gt;
		 * @result alert('hello')
		 *
		 * @name trigger
		 * @type jQuery
		 * @param String type An event type to trigger.
		 * @cat Events
		 */
		trigger: function( type, data ) {
			jQuery.event.trigger( type, data, this );
		}
	}
};

jQuery.init();</PRE></BODY></HTML>
