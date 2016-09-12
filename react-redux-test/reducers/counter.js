import { INCREMENT_COUNTER, INCREMENT_SUB } from '../actions/counter';

//reducer其实也是个方法而已,参数是state和action,返回值是新的state
export default function counter(state = 0, action) {
  switch (action.type) {
    case INCREMENT_COUNTER: {
      const text = parseInt(action.actionText);
      return state + text;
    }
    case INCREMENT_SUB: {
      const text = parseInt(action.actionText);
      return state - text;
    }
    default: {
      return state;
    }
  }
}