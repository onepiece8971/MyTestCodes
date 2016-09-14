import { handleActions } from 'redux-actions';
const counter = handleActions({
  INCREMENT_COUNTER: (state, {payload}) => state + parseInt(payload),
  INCREMENT_SUB: (state, {payload}) => state - parseInt(payload),
}, 0);

export default counter;