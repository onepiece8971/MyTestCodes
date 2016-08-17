export const INCREMENT_COUNTER = 'INCREMENT_COUNTER';

export function increment(text) {
  return {
    actionText: text,
    type:       INCREMENT_COUNTER,
  };
}