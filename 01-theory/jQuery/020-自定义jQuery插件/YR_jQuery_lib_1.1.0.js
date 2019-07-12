/**
 * Created by yangrui on 2019/7/11.
 */


/**
 * 给 jQuery 添加自定义的方法 myfunc
 * 其它用户就可以 $(selector).func(); 这样直接调用, 就像是调用 jQuery 中的原生方法一样
 */
$.fn.myfunc = function () {
    // 经过测试 当前 方法内 this 对象任然为 jQuery 对象
    console.log(this);
    console.log('-----自定义 jQuery 库方法被调用了');
}


/**
 * 给元素设置颜色
 * color 是字符串类型
 */
$.fn.setColor = function (color) {
    console.log('-----设置颜色----');
    this.css('background-color', color);
}