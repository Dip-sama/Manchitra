import axios from 'axios';

// Action Types
export const FETCH_MANDAPS_REQUEST = 'FETCH_MANDAPS_REQUEST';
export const FETCH_MANDAPS_SUCCESS = 'FETCH_MANDAPS_SUCCESS';
export const FETCH_MANDAPS_FAILURE = 'FETCH_MANDAPS_FAILURE';

export const fetchMandaps = (location, distance) => async (dispatch) => {
  dispatch({ type: FETCH_MANDAPS_REQUEST });
  try {
    // Replace with your actual API endpoint
    const response = await axios.get(`/api/mandaps`, {
      params: {
        lat: location.lat,
        lng: location.lng,
        distance
      }
    });
    dispatch({
      type: FETCH_MANDAPS_SUCCESS,
      payload: response.data
    });
  } catch (error) {
    dispatch({
      type: FETCH_MANDAPS_FAILURE,
      payload: error.message
    });
  }
};