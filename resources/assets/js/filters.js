import Vue from 'vue'

Vue.filter("toDate", (value) => {
//   var date = Date.parse(value)
//   var formatter = new Intl.DateTimeFormat('en-GB', {
//     year: 'numeric',
//     month: 'short',
//     day: 'numeric'
//   })
//   return formatter.format(date)
  var date_string = "";  
  var oneDay = 24 * 60 * 60 * 1000; // hours*minutes*seconds*milliseconds  
  var firstDate = new Date();  
  var secondDate = new Date(value);  

  var diffDays = Math.round(  
    Math.abs((firstDate.getTime() - secondDate.getTime()) / oneDay)  
  );  

  var formatter = new Intl.DateTimeFormat("en-GB", {
    year: "numeric",
    month: "short",
    day: "numeric"
  })

  if (diffDays <= 1) {  
    date_string = "Today";  
  } else if (diffDays > 1 && diffDays <= 7) {  
    date_string = diffDays + " Days ago";  
  } else if (diffDays == 7) {  
    date_string = "1 Week ago";  
  } else if (diffDays >= 7) {  
    date_string = formatter.format(date_string);
  }  
  return date_string;
})