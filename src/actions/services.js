import axios from 'axios';

// Action Types
export const FETCH_SERVICES_REQUEST = 'FETCH_SERVICES_REQUEST';
export const FETCH_SERVICES_SUCCESS = 'FETCH_SERVICES_SUCCESS';
export const FETCH_SERVICES_FAILURE = 'FETCH_SERVICES_FAILURE';

export const fetchNearbyServices = (location, distance) => async (dispatch) => {
  dispatch({ type: FETCH_SERVICES_REQUEST });
  try {
    // Replace with your actual API endpoint
    const response = await axios.get(`/api/services`, {
      params: {
        lat: location.lat,
        lng: location.lng,
        distance
      }
    });
    dispatch({
      type: FETCH_SERVICES_SUCCESS,
      payload: response.data
    });
  } catch (error) {
    dispatch({
      type: FETCH_SERVICES_FAILURE,
      payload: error.message
    });
  }
};