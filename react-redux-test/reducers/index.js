import { combineReducers } from 'redux';
import counter from './counter';
import account from './account';

//使用redux的combineReducers方法将所有reducer打包起来
const rootReducer = combineReducers({
  account,
  counter,
});

export default rootReducer;
