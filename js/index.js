/**
 *  Light Switch  */

(function () {
  let lightSwitch = document.getElementById('lightSwitch');
  if (!lightSwitch) {
    return;
  }

  /**
   * @function darkmode
   * @summary: changes the theme to 'dark mode' and save settings to local stroage.
   * Basically, replaces/toggles every CSS class that has '-light' class with '-dark'
   */
  function darkMode() {
    document.querySelectorAll('.bg-light').forEach((element) => {
      element.className = element.className.replace(/-light/g, '-dark');
    });
document.querySelectorAll('.bi-sun').forEach((element) => {
      element.className = element.className.replace(/-sun/g, '-moon');
    });
    document.body.classList.add('bg-dark');

    if (document.body.classList.contains('text-dark')) {
      document.body.classList.replace('text-dark', 'text-light');
    } else {
      document.body.classList.add('text-light');
    }

    // Tables
    var tables = document.querySelectorAll('table');
    for (var i = 0; i < tables.length; i++) {
      // add table-dark class to each table
      tables[i].classList.add('table-dark');
    }

    // set light switch input to true
    if (!lightSwitch.checked) {
      lightSwitch.checked = true;
    }
    localStorage.setItem('lightSwitch', 'dark');
  }

  /**
   * @function lightmode
   * @summary: changes the theme to 'light mode' and save settings to local stroage.
   */
  function lightMode() {
    document.querySelectorAll('.bg-dark').forEach((element) => {
      element.className = element.className.replace(/-dark/g, '-light');
    });
document.querySelectorAll('.bi-moon').forEach((element) => {
      element.className = element.className.replace(/-moon/g, '-sun');
    });

    document.body.classList.add('bg-light');

    if (document.body.classList.contains('text-light')) {
      document.body.classList.replace('text-light', 'text-dark');
    } else {
      document.body.classList.add('text-dark');
    }

    // Tables
    var tables = document.querySelectorAll('table');
    for (var i = 0; i < tables.length; i++) {
      if (tables[i].classList.contains('table-dark')) {
        tables[i].classList.remove('table-dark');
      }
    }

    if (lightSwitch.checked) {
      lightSwitch.checked = false;
    }
    localStorage.setItem('lightSwitch', 'dark');
  }

  /**
   * @function onToggleMode
   * @summary: the event handler attached to the switch. calling @darkMode or @lightMode depending on the checked state.
   */
  function onToggleMode() {
    if (lightSwitch.checked) {
      darkMode();
    } else {
      lightMode();
    }
  }

  /**
   * @function getSystemDefaultTheme
   * @summary: get system default theme by media query
   */
  function getSystemDefaultTheme() {
    const darkThemeMq = window.matchMedia('(prefers-color-scheme: dark)');
    if (darkThemeMq.matches) {
      return 'dark';
    }
    return 'light';
  }

  function setup() {
    var settings = localStorage.getItem('lightSwitch');
    if (settings == null) {
      settings = getSystemDefaultTheme();
    }
    if (settings == 'dark') {
      lightSwitch.checked = true;
    }
    lightSwitch.addEventListener('change', onToggleMode);
    onToggleMode();
  } 
  setup();
})();
/*
let strings = "Hi am Agu C. Christopher a web developer am 14+ years old am a Nigerian and hail from Umuota village in Umuhu Community in Imo State. \n  \n I love coding and watching  movies  \n\n I currently code with Html, Css, Javascript, React Native, React.js, Bootstrap, Php and Mysql. \n \n Thanks .";
 let arrayy = strings.split("");     let timer;
    function looper() {       if (arrayy.length > 0) {         document.getElementById("typeb").innerHTML += arrayy.shift(""); 
      
    } else {     
    clearTimeout(looper); 
    } 
    timer = setTimeout('looper()', 100);     
    }     
    looper();   */
    