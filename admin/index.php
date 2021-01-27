<?php
session_start();

// check apakah session email sudah ada atau belum.
// jika belum maka akan diredirect ke halaman index (login)
if( empty($_SESSION['username']) ){
    header('Location: index.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Menu</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
    /* A simple reset. */
*,::before,::after {
  margin: 0;
  box-sizing: border-box;
}
  
/* Heydon Pickering’s lobotomized owl. Details: https://bit.ly/1H7MXUD */
*+* {
  margin-top: 16px;
  margin-top: 16px;
  margin-top: 1rem;
}

/* Set up fonts, colors and all that jazz. */
body {
  background: #f9fdfe;
  color: #686a69;
  font-family: 'Open Sans', sans-serif;
  font-size: 18px;
  line-height: 1.75;
  text-rendering: optimizeLegibility;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

/* Headings use a different font because they’re hipsters. */
h1,h2 {
  color: #2a2f2c;
  font-family: Lato, sans-serif;
  font-weight: 300;
  line-height: 1.125;
}
.demo {font-size: 12px; font-family: Lato, sans-serif; color:black;}
/* Set up general layout rules for outer containers. */
.content,.results {
  width: 90vw;
  max-width: 550px;
  margin: 8vh auto;
}

.content__heading {font-size: 125%;
}

.content__lede {margin-top: 8px;margin-top: 8px;margin-top: 0.5rem;font-size: 87.5%;
}

.results__heading {font-size: 110%;
}

.results__display-wrapper {margin-top: 16px;margin-top: 16px;margin-top: 1rem;padding: 8px 16px;padding: 8px 16px;padding: 0.5rem 1rem;background: #f9fdfe;border: 1px solid #cdcfcf;overflow-x: scroll;
}

.contact-form {
  position: relative;
  display: block;
  margin: 0;
  padding: 16px 0 32px;
  padding: 16px 0 32px;
  padding: 1rem 0 2rem;
  border-top: 1px solid #cdcfcf;
  border-bottom: 1px solid #cdcfcf;
  overflow: hidden;
}

.contact-form__input-group {margin-top: 4px;margin-top: 4px;margin-top: 0.25rem;padding: 8px 16px;padding: 8px 16px;padding: 0.5rem 1rem;
}

.contact-form__label {display: block;color: #414643;font-family: Lato, sans-serif;font-size: 75%;line-height: 1.125;
}

.contact-form__label--checkbox-group {display: inline-block;margin-right: 16px;margin-right: 16px;margin-right: 1rem;font-size: 75%;
}

.contact-form__label--checkbox,.contact-form__label--radio {display: inline-block;margin-left: 4px;margin-left: 4px;margin-left: 0.25rem;
}

.contact-form__input {display: block;margin-top: 0;padding: 8px 12px;padding: 8px 12px;padding: 0.5rem 0.75rem;border: 1px solid #cdcfcf;width: 100%;font-family: 'Open Sans', sans-serif;font-size: 16px;font-size: 16px;font-size: 1rem;-webkit-transition: 150ms border-color linear;transition: 150ms border-color linear;
}

.contact-form__input--checkbox,.contact-form__input--radio {display: inline-block;width: auto;
}

.contact-form__input--checkbox~.contact-form__input--checkbox, .contact-form__input--radio~.contact-form__input--radio {margin-left: 16px;margin-left: 16px;margin-left: 1rem;
}

.contact-form__input:focus,.contact-form__input:active {border-color: #686a69;outline: 0;
}

.contact-form__button {display: block;margin: 8px 16px 0;margin: 8px 16px 0;margin: 0.5rem 1rem 0;padding: 0 16px 2px;padding: 0 16px 2px;padding: 0 1rem 0.125rem;background-color: #686a69;border: 0;color: #f9fdfe;font-family: lato, sans-serif;font-size: 100%;letter-spacing: 0.05em;line-height: 1.5;text-transform: uppercase;-webkit-transition: 150ms all linear;transition: 150ms all linear;
}
.contact-form__button:hover,.contact-form__button:active,.contact-form__button:focus {background: #2a2f2c;cursor: pointer;outline: 0;
}
</style>
<body>
<nav class="navbar navbar-default ">
  <div class="container-fluid">
  <button type="button" class="btn btn-default navbar-btn"><a href="../admin/logout.php">Log out</a></button>
  </div><!-- /.container-fluid -->
</nav>
<div class="container">
  <h2>Admin Menu</h2>
  <p>add reduce data on the website</p>  
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Server 1</th>
        <th>Server 2</th>
      </tr>
    </thead>
    <tbody id="myTable">
    <?php
        $json = file_get_contents('../js/database.json');
        $json_decoded = json_decode($json,TRUE);
        $elementCount  = count($json_decoded);
    ?>
    <?php foreach($json_decoded as $result) { ?>
        <tr>
            <td><?php echo $result['column3']; ?></td>
			<td><?php echo $result['column4']; ?></td>
			<td><?php echo $result['column5']; ?></td>
        </tr>
	<?php } ?>
    </tbody>
  </table>
</div>

<section class="content">
  <h1 class="content__heading">Add database</h1>
  <p class="content__lede">please check first before filling</p>
  <form class="content__form contact-form">
    <div class="testing">
      <p>Does this do anything?</p>
    </div>
    <div class="contact-form__input-group">
      <label class="contact-form__label" for="column1">Times</label>
      <input class="contact-form__input contact-form__input--text" id="column1" name="column1" type="text"/>
    </div>
    <input name="column2" type="hidden" value="<?php echo $elementCount+1?>"/>
    <div class="contact-form__input-group">
      <label class="contact-form__label" for="column3">Name</label>
      <input class="contact-form__input contact-form__input--text" id="column3" name="column3" type="text"/>
    </div>
    <div class="contact-form__input-group">
      <label class="contact-form__label" for="column4">Server 1</label>
      <input class="contact-form__input contact-form__input--email" id="column4" name="column4" type="link"/>
    </div>
    <div class="contact-form__input-group">
      <label class="contact-form__label" for="column5">Server 2</label>
      <input class="contact-form__input contact-form__input--email" id="column5" name="column5" type="link"/>
    </div>
    <div class="contact-form__input-group">
      <label class="contact-form__label" for="column6">Status</label>
      <select class="contact-form__input contact-form__input--select" id="column6" name="column6">
        <option>Aktif</option>
        <option>Nonaktif</option>
      </select>
    </div>
    <input name="authentication" type="hidden" value="Token 1b3a9374-1a8e-434e-90ab-21aa7b9b80e7"/>
    <div>
    <input name:"query" type="hidden" id="demo" value="query:{}"/>
    </div>
    
    <button class="contact-form__button" type="submit">Send It!</button>
  </form>
</section>
<div class="results">
  <h2 class="results__heading">Form Data</h2>
  <pre class="results__display-wrapper"><code class="results__display"></code></pre>
</div>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<script>
/**
 * Checks that an element has a non-empty `name` and `value` property.
 * @param  {Element} element  the element to check
 * @return {Bool} true if the element is an input, false if not
 */
const isValidElement = element => {
  return element.name && element.value;
};

/**
 * Checks if an element’s value can be saved (e.g. not an unselected checkbox).
 * @param  {Element} element  the element to check
 * @return {Boolean}          true if the value should be added, false if not
 */
const isValidValue = element => {
  return !["checkbox", "radio"].includes(element.type) || element.checked;
};

/**
 * Checks if an input is a checkbox, because checkboxes allow multiple values.
 * @param  {Element} element  the element to check
 * @return {Boolean}          true if the element is a checkbox, false if not
 */
const isCheckbox = element => element.type === "checkbox";

/**
 * Checks if an input is a `select` with the `multiple` attribute.
 * @param  {Element} element  the element to check
 * @return {Boolean}          true if the element is a multiselect, false if not
 */
const isMultiSelect = element => element.options && element.multiple;

/**
 * Retrieves the selected options from a multi-select as an array.
 * @param  {HTMLOptionsCollection} options  the options for the select
 * @return {Array}                          an array of selected option values
 */
const getSelectValues = options =>
  [].reduce.call(
    options,
    (values, option) => {
      return option.selected ? values.concat(option.value) : values;
    },
    []
  );

/**
 * A more verbose implementation of `formToJSON()` to explain how it works.
 *
 * NOTE: This function is unused, and is only here for the purpose of explaining how
 * reducing form elements works.
 *
 * @param  {HTMLFormControlsCollection} elements  the form elements
 * @return {Object}                               form data as an object literal
 */
const formToJSON_deconstructed = elements => {
  // This is the function that is called on each element of the array.
  const reducerFunction = (data, element) => {
    // Add the current field to the object.
    data[element.name] = element.value;

    // For the demo only: show each step in the reducer’s progress.
    console.log(JSON.stringify(data));

    return data;
  };

  // This is used as the initial value of `data` in `reducerFunction()`.
  const reducerInitialValue = {};

  // To help visualize what happens, log the inital value, which we know is `{}`.
  console.log("Initial `data` value:", JSON.stringify(reducerInitialValue));

  // Now we reduce by `call`-ing `Array.prototype.reduce()` on `elements`.
  const formData = [].reduce.call(
    elements,
    reducerFunction,
    reducerInitialValue
  );

  // The result is then returned for use elsewhere.
  return formData;
};

/**
 * Retrieves input data from a form and returns it as a JSON object.
 * @param  {HTMLFormControlsCollection} elements  the form elements
 * @return {Object}                               form data as an object literal
 */
const formToJSON = elements =>
  [].reduce.call(
    elements,
    (data, element) => {
      // Make sure the element has the required properties and should be added.
      if (isValidElement(element) && isValidValue(element)) {
        /*
     * Some fields allow for more than one value, so we need to check if this
     * is one of those fields and, if so, store the values as an array.
     */
        if (isCheckbox(element)) {
          data[element.name] = (data[element.name] || []).concat(element.value);
        } else if (isMultiSelect(element)) {
          data[element.name] = getSelectValues(element);
        } else {
          data[element.name] = element.value;
        }
      }

      return data;
    },
    {}
  );

/**
 * A handler function to prevent default submission and run our custom script.
 * @param  {Event} event  the submit event triggered by the user
 * @return {void}
 */
const handleFormSubmit = event => {
  // Stop the form from submitting since we’re handling that with AJAX.
  event.preventDefault();

  // Call our function to get the form data.
  const data = formToJSON(form.elements);

  // Demo only: print the form data onscreen as a formatted JSON object.
  const dataContainer = document.getElementsByClassName("results__display")[0];

  // Use `JSON.stringify()` to make the output valid, human-readable JSON.
  dataContainer.textContent = JSON.stringify(data, null, "  ");

  // ...this is where we’d actually do something with the form data...
};

/*
 * This is where things actually get started. We find the form element using
 * its class name, then attach the `handleFormSubmit()` function to the 
 * `submit` event.
 */
var form = document.getElementsByClassName("contact-form")[0];
if (form){
	form.addEventListener("submit", handleFormSubmit, false);
}

/* adding more background info to grab from user */
function myFunction() {
	var z = document.getElementById("query").value;
  var x = navigator.userAgent;
	var y = Intl.DateTimeFormat().resolvedOptions().timeZone;
    var obj = {"browser_timezone" : String(y),"user_agent" : String(x),"query": String(z)};
    var myJSON = JSON.stringify(obj);
    document.getElementById("demo").innerHTML = myJSON;
}
if(window.attachEvent) {
    window.attachEvent('onload', myFunction);
} else {
    if(window.onload) {
        var curronload = window.onload;
        var newonload = function(evt) {
            curronload(evt);
            myFunction(evt);
        };
        window.onload = newonload;
    } else {
        window.onload = myFunction;
    }
}
</script>
</body>
</html>
