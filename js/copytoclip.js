function makeCopy() {
    var copyText = document.getElementById('linkOut');
    copyText.select();
    document.execCommand("copy");
}