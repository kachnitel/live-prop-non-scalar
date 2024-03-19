# Live Components DateTime LiveProp limitation

## Description
This sample demonstrates how to use the `LiveProp` feature of the `DateTime` component to update the date and time in real-time. The value can be updated internally inside the component, but cannot be communicated the same way as a scalar value using `data-model`, `onUpdated` hook in parent etc.

A workaround using events can be applied to communicate the updated value to the parent component. That is inconsistent with the behavior of scalar values which can utilize powerful functionality such as `data-model`, `updateFromParent`, `onUpdated` etc. essentially limiting the use of many features to string/number/boolean values.
