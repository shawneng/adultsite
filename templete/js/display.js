function changeStyleDiv() {
    document.getElementById('authorization').style.display = 'block';
    document.getElementById('bga').style.display = 'block';
}

function closemenu() {
    document.getElementById('authorization').style.display = 'none';
    document.getElementById('bga').style.display = 'none';
    document.getElementById('closeerror').style.display = 'none';
}

function openloginmenu() {
    document.getElementById('loginmenu').style.display = 'block';
    document.getElementById('formsearch').style.display = 'none';
}

function closeloginmenu() {
    document.getElementById('loginmenu').style.display = 'none';
}

function opensearch() {
    document.getElementById('formsearch').style.display = 'block';
}

function closesearch() {
    document.getElementById('formsearch').style.display = 'none';
}