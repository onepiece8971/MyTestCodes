export const INCREMENT_COUNTER = 'INCREMENT_COUNTER'

export function increment(text) {
    return {
        type: INCREMENT_COUNTER,
        text: text,
    }
}