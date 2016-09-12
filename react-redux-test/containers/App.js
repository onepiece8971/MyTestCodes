import { connect } from 'react-redux';
import Counter from '../components/Counter';
import * as CounterActions from '../actions/counter';

//通过react-redux提供的connect方法将我们需要的state中的数据和actions中的方法绑定到props上
export default connect(
  //将state.counter绑定到props的counter
  state => {
    return {
      counter: state.counter, // 自动匹配reducers对应方法返回的值
      account: state.account,
    };
  },
  CounterActions
)(Counter);