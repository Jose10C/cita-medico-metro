"use strict";

$("#myEvent").fullCalendar({
  height: 'auto',
  header: {
    left: 'prev,next today',
    center: 'title',
    right: 'month,agendaWeek,agendaDay,listWeek'
  },
  editable: true,
  events: [
    {
      title: 'Conference',
      start: '2023-11-9',
      end: '2023-11-11',
      backgroundColor: "#fff",
      borderColor: "#fff",
      textColor: '#000'
    },
    {
      title: "John's Birthday",
      start: '2023-11-14',
      backgroundColor: "#007bff",
      borderColor: "#007bff",
      textColor: '#fff'
    },
    {
      title: 'Reporting',
      start: '2023-11-10T11:30:00',
      backgroundColor: "#f56954",
      borderColor: "#f56954",
      textColor: '#fff'
    },
    {
      title: 'Starting New Project',
      start: '2023-11-11',
      backgroundColor: "#ffc107",
      borderColor: "#ffc107",
      textColor: '#fff'
    },
    {
      title: 'Social Distortion Concert',
      start: '2023-11-24',
      end: '2023-11-27',
      backgroundColor: "#000",
      borderColor: "#000",
      textColor: '#fff'
    },
    {
      title: 'Lunch',
      start: '2023-11-24T13:15:00',
      backgroundColor: "#fff",
      borderColor: "#fff",
      textColor: '#000',
    },
    {
      title: 'Company Trip',
      start: '2023-11-28',
      end: '2023-11-31',
      backgroundColor: "#fff",
      borderColor: "#fff",
      textColor: '#000',
    },
  ]

});
