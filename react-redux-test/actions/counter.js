import { createActions } from 'redux-actions';
export const INCREMENT_COUNTER = 'INCREMENT_COUNTER';
// 命名必须要与后面常量保持一致
export const { incrementCounter, incrementAccount, incrementSub } = createActions(
  INCREMENT_COUNTER,
  'INCREMENT_ACCOUNT',
  'INCREMENT_SUB'
);