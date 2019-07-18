/**
 * 获取上一个兄弟元素
 * @param element
 * @returns {Node | (() => (Node | null)) | ActiveX.IXMLDOMNode|null}
 */

function getPreviousElementSibling(element) {
    let el = element;
    while (el = el.previousSibling) {
        if (el.nodeType === 1) {
            return el;
        }
    }

    return null;

}


/**
 * 获取下一个兄弟元素
 * @param element
 * @returns {ChildNode | (() => (Node | null)) | ActiveX.IXMLDOMNode | Node|null}
 */
function getNextElementSibling(element) {
    let el = element;
    while (el = el.nextSibling) {
        if (el.nodeType === 1) {
            return el;
        }
    }

    return null;
}


/**
 * 获取标签内容的兼容方法
 * @param element
 */

function getInnerText(element) {
    if (typeof element.innerText === 'string') {
        return element.innerText;
    } else {
        return element.textContent;
    }
}

/**
 * 设置标签内容的兼容方法
 * @param element
 * @param value
 */
function setInnerText(element, value) {
    if (typeof element.innerText === 'string') {
        element.innerText = value;
    } else {
       element.textContent =value;
    }
}

/**
 * 获取[0,max)的随机整数
 * @param max
 */
function getRandomInt(max) {
    return Math.floor(Math.random() * Math.floor(max));
}

/**
 * 获取第一个子元素的兼容性代码
 * @param element
 * @returns {ChildNode | *|Element}
 */
function getFirstElement(element) {
    if (element.firstElementChild) {
        return element.firstElementChild;
    } else {
        var arr = element.childNodes;
        for (let i = 0; i < arr.length; i++) {
            if (arr[i].nodeType === 1) {
                return arr[i];
            }
        }
    }
}

/**
 * 获取最后一个子元素的兼容性代码
 * @param element
 * @returns {ChildNode | *|Element}
 */

function getLastElement(element) {
    if (element.lastElementChild) {
        return element.lastElementChild;
    } else {
        var arr = element.childNodes;
        for (let i = arr.length - 1; i >= 0; i--) {
            if (arr[i].nodeType === 1) {
                return arr[i];
            }
        }
    }
}
