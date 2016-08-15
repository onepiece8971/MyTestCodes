import { INCREMENT_COUNTER } from '../actions/counter'

//reducer其实也是个方法而已,参数是state和action,返回值是新的state
export default function counter(state = 0, action) {
    switch (action.type) {
        case INCREMENT_COUNTER:
            const text =  parseInt(action.text);
            return state + text;
            break
        default:
            return state;
            break
    }
}