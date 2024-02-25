<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Calander</title>
    <link rel="stylesheet" href="http://localhost/cms2/css_cal/page.css">
    <link rel="stylesheet" href="http://localhost/cms2/css_cal/style.css">
    <link rel="stylesheet" href="http://localhost/cms2/css_cal/theme.css">
    <link rel="shortcut icon" href="favicon.png">
    <meta name="viewport" content="width=device-width">
  </head>
  <body>
   
    <main>
      <div class="calendar-wrapper" id="calendar-wrapper"></div>
     
    </main>
   
      
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="calendar.min.js"></script>
    <!-- <script src="calendar.js"></script> -->
    <script
      src="https://unpkg.com/codeflask/build/codeflask.min.js"></script>
    <script type="text/javascript">
      var datee=Date();
      var config = `
function selectDate(date) {
  $('#calendar-wrapper').updateCalendarOptions({
    date: date
  });
  console.log(calendar.getSelectedDate());
}

var defaultConfig = {
  weekDayLength: 1,
  date: '`+datee+`',
  onClickDate: selectDate,
  showYearDropdown: true,
  startOnMonday: false,
};

var calendar = $('#calendar-wrapper').calendar(defaultConfig);
console.log(calendar.getSelectedDate());
`;
      eval(config);
      const flask = new CodeFlask('#editor', { 
        language: 'js', 
        lineNumbers: true 
      });
      flask.updateCode(config);
      flask.onUpdate((code) => {
        try {
          eval(code);
        } catch(e) {}
      });
    </script>
    <script defer src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
    <script defer>
      fetch('https://raw.githubusercontent.com/wrick17/calendar-plugin/master/README.md')
        .then(response => response.text())
        .then(function(text) {
          const docs = text.split('**DOCS**')[1];
          document.getElementById('content').innerHTML = `
          <div>
            <h2>DOCS</h2>
            ${marked.parse(docs)}
          <div>
          `;
        });
    </script>
  </body>
</html>
