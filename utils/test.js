function f() {
    return 66;
}


function d(element) {
    console.log("+++++");
    let el=element;
    while (el=el.previousSibling){
        if (el.nodeType===1){
            return el;
        }
    }

    return null;

}


function c(element) {
    let el=element;
    while (el=el.nextSibling){
        if (el.nodeType===1){
            return el;
        }
    }

    return null;
}