export const INCREMENT_COUNTER = 'INCREMENT_COUNTER';
export const INCREMENT_SUB = 'INCREMENT_SUB';
export const INCREMENT_ACCOUNT = 'INCREMENT_ACCOUNT';

export function increment(text) {
  return {
    actionText: text,
    type:       INCREMENT_COUNTER,
  };
}

export function sub(text) {
  return {
    actionText: text,
    type:       INCREMENT_ACCOUNT,
  };
}

export function counterSub(text) {
  return {
    actionText: text,
    type:       INCREMENT_SUB,
  };
}