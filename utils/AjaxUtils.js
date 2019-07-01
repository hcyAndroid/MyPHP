import '../jquery/jquery-1.12.4';//导入jquery



/**
 *
 * @param method
 * @param url
 * @param params
 */
function ajax(method, url, params) {
    method = method.toUpperCase();//将小写转大写
    var xhr = new XMLHttpRequest();
    if (method === 'POST') {
        //设置请求头
        xhr.open(method, url);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        params = params || null;
    } else {
        url = url + '?' + params;
        params = null;
        xhr.open(method, url);
    }
    xhr.send(params);
    xhr.onreadystatechange = function () {
        if (this.readyState !== 4) {
            return;
        }
        console.log(this.responseText);
    }
}


/**
 *
 * @param method  get/post  可大写 可小写
 * @param url     请求路径
 * @param params  传对象/'id=1&age=10'
 * @param callBack 回调函数
 */

function ajaxRequest2(method, url, params, callBack) {
    method = method.toUpperCase();
    var xhr = new XMLHttpRequest();
    if (typeof params === 'object') {
        var paramsArr = [];
        for (var key in params) {
            var value = params[key];
            paramsArr.push(key + '=' + value);
        }
        params = paramsArr.join('&');
    }
    if (method === 'POST') {
        //设置请求头
        xhr.open(method, url);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        params = params || null;
    } else {
        url = url + '?' + params;
        params = null;
        xhr.open(method, url);
    }
    console.log('请求体:' + params);
    xhr.send(params);
    xhr.onreadystatechange = function () {
        if (this.readyState !== 4) {
            return;
        }
        if (callBack != null) {
            callBack(this.responseText);
        } else {
            console.log('没注册回调函数')
        }
    }
}


//回调黑洞的处理
function ajaxRequest3(method, url, params, callBack) {
    method = method.toUpperCase();
    var xhr = new XMLHttpRequest();
    if (typeof params === 'object') {
        var paramsArr = [];
        for (var key in params) {
            var value = params[key];
            paramsArr.push(key + '=' + value);
        }
        params = paramsArr.join('&');
    }
    if (method === 'POST') {
        //设置请求头
        xhr.open(method, url);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        params = params || null;
    } else {
        url = url + '?' + params;
        params = null;
        xhr.open(method, url);
    }
    console.log('请求体:' + params);
    xhr.send(params);
    xhr.onreadystatechange = function () {
        if (this.readyState !== 4) {
            return;
        }
        if (callBack != null) {
            callBack(this.responseText);
        } else {
            console.log('没注册回调函数')
        }
    }
}


