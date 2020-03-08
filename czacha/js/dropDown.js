function createDropList($container) {
    const dropDownList = document.createElement("select");
    const myOption = document.createElement("option");

    myOption.text = 'costa costam';
    dropDownList.appendChild(myOption);
    $container.appendChild(dropDownList);
}

function init() {
    // gameStartTime=Date.now();//my update
    const $container = document.querySelector(".c");
    createDropList($container);
}

init();