/**
 * 获取时间间隔
 * @param start 毫秒
 * @param end   毫秒
 * @returns {{sec: number, min: number, hour: number, day: number}}
 */

function getTimeDifference(start, end) {
    var diff = (end - start) / 1000;//毫秒转秒
    if (diff >= 0) {
        return {
            day: Math.round(diff / 60 / 60 / 24),
            hour: Math.round(diff / 60 / 60 % 24),
            min: Math.round(diff / 60 % 60),
            sec: Math.round(diff % 60)
        };
    } else {
        return null;
    }
}
