import { handleActions } from 'redux-actions';
const account = handleActions({
  INCREMENT_ACCOUNT: (state, {payload}) => state - parseInt(payload),
}, 10);

// 单个reducer
/*import { handleAction } from 'redux-actions';
const account = handleAction('INCREMENT_ACCOUNT', {
  next: (state, {payload}) => state - parseInt(payload),
}, 10);*/

export default account;
