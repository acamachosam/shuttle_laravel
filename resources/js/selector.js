import './bootstrap';

function selectFunction() {
    document.getElementsByClassName('show').className = 'hidden';
    var x = document.getElementById("reservationtipe").value;
    document.getElementById(x).className = 'show';
  }