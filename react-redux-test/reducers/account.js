import { INCREMENT_ACCOUNT } from '../actions/counter';

//reducer其实也是个方法而已,参数是state和action,返回值是新的state
export default function account(state = 10, action) {
  switch (action.type) {
    case INCREMENT_ACCOUNT: {
      const text = parseInt(action.actionText);
      return state - text;
    }
    default: {
      return state;
    }
  }
}