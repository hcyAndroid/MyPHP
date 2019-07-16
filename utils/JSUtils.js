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
 * 获取【0，max)的随机整数
 * @param max
 */
function getRandomInt(max) {
    return Math.floor(Math.random() * Math.floor(max));
}