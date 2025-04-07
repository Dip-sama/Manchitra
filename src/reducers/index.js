import { combineReducers } from 'redux';

const initialState = {
  // Add your initial state here
};

const rootReducer = (state = initialState, action) => {
  switch (action.type) {
    default:
      return state;
  }
};

export default combineReducers({
  root: rootReducer,
}); 