import React, { Component, PropTypes } from 'react';

class Counter extends Component {
  render() {
    //从组件的props属性中导入四个方法和一个变量
    const { account, incrementCounter, counter, incrementAccount, incrementSub } = this.props;
    let addNumber = function() {
      let n = document.getElementsByTagName('input')[0].value;
      incrementCounter(n);
    };
    let counterSubNumber = function() {
      let n = document.getElementsByTagName('input')[0].value;
      incrementSub(n);
    };
    let subNumber = function() {
      let n = document.getElementsByTagName('input')[1].value;
      incrementAccount(n);
    };
    //渲染组件，包括一个数字，四个按钮
    return (
      <div>
        <p>
          Clicked: {counter} times
          {' '}
          <input type="text" defaultValue="1"/>
          <button onClick={addNumber}>+</button>
          <button onClick={counterSubNumber}>-</button>
        </p>
        <p>
          Clicked: {account} times
          {' '}
          <input type="text" defaultValue="1"/>
          <button onClick={subNumber}>-</button>
        </p>
      </div>
    );
  }
}

//限制组件的props安全
Counter.propTypes = {
  //counter必须为数字，且必须存在
  account: PropTypes.number.isRequired,
  counter: PropTypes.number.isRequired,
  incrementAccount: PropTypes.func.isRequired,
  //increment必须为fucntion,且必须存在
  incrementCounter: PropTypes.func.isRequired,
  incrementSub: PropTypes.func.isRequired,
};

export default Counter;