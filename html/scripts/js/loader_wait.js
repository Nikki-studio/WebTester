// this sleep function waits for 3.53 seconds and then redirects the user to index.html
function sleep(ms){
    return new Promise(resolve => setTimeout(resolve,ms));
}
async function demo() {
    console.log("Welcome...");
    await sleep(2500);
    window.location = "html/index.php";
}
demo();