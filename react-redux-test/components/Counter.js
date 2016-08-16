import React, { Component, PropTypes } from 'react'

class Counter extends Component {
    render() {
        //从组件的props属性中导入四个方法和一个变量
        const { increment, counter } = this.props;
        let addNumber = function(){
            let n = document.getElementsByTagName('input')[0].value;
            increment(n);
        }
        //渲染组件，包括一个数字，四个按钮
        return (
            <p>
                Clicked: {counter} times
                {' '}
                <input type="text" defaultValue="1"/>
                <button onClick={addNumber}>+</button>
            </p>
        )
    }
}

//限制组件的props安全
Counter.propTypes = {
    //increment必须为fucntion,且必须存在
    increment: PropTypes.func.isRequired,
    //counter必须为数字，且必须存在
    counter: PropTypes.number.isRequired
};

export default Counter