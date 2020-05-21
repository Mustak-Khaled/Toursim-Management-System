1. Login
-id
-password
-status
-type
-ans

2. User
-id
-name
-dob
-age
-mobile
-address
-passportid
-status
-gender
-email
-image

3. Packages
-id
-pname
-location
-image
-price
-features
-travel_date


4. Booking
-id
-p_id/h_id/t_id
-c_id
-status

5. Review
-id
-c_id
-comment
-status
-b_id

6. Issues
-id
-c_id
-comment

7. Admin
-id
-name
-mobile
-email
-address
-age
-dob
-gender
-status
8. Employee
-id
-name
-dob
-salary
-address
-gender
-age
-email
-mobile
-status
9. Payment
-id
-status
-c_id
-b_id
-amount

10. Bill
-id
-status
-pay_status
-c_id
-b_id
-amount




11. Hotel
-id
-name
-status
-ref
-price
-room_no
-details
-location
-count

12. Transport
-id
-name
-type (bus,air,train,car)
-traveldate
-location(form)
-location(to)
-ref
-seat_no
-price
-details
-count







13. Ticket
-id
-status
-b_id
-price
-from_date
-no_days
-travel_date
-seat_no



14.booktracking
Bid
cid
status
active status












Relation: 1NF
1.	Manage: admin, emp: 1…*
Admin (a_id, name, mobile, email, address, age, dob, gender, status)
Emp (e_id, name, dob, salary, address, gender, age, email, mobile, status, a_id)

2.	Manage: admin, package: 1...*
Admin (a_id, name, mobile, email, address, age, dob, gender, status)
Packages (p_id, p_name, location, image, price, features, travel_date, a_id)

3.	Manage: emp, transport: 1...*
Emp (e_id, name, dob, salary, address, gender, age, email, mobile, status)
Transport (tr_id, name, type (bus,air,train,car), traveldate, location(form), location(to), ref, seat_no, price, details, count, e_id)
4.	Manage: emp, hotel: 1...*
Emp (e_id, name, dob, salary, address, gender, age, email, mobile, status)
Hotel (h_id, name, status, ref, price, room_no, details, location, count, e_id)
5.	Manage: emp, ticket: 1…*
Emp (e_id, name, dob, salary, address, gender, age, email, mobile, status)
Ticket (t_id, status, b_id, price, from_date, no_days, travel_date, seat_no, e_id)
6.	Repot: user, issue: 1…*
User (c_id, name, dob, age, mobile, address, passport_id, status, gender, email, image)
	Issue (is_id, c_id, comment)
7.	Give: user, review: 1…*
User (c_id, name, dob, age, mobile, address, passport_id, status, gender, email, image)
Review (r_id, c_id, comment, status, b_id)




8.	Pay: user, payment: 1…*
User (c_id, name, dob, age, mobile, address, passport_id, status, gender, email, image)
	Payment (py_id, status, c_id, b_id, amount)
9.	Book: user, booking: 1…*
User (c_id, name, dob, age, mobile, address, passport_id, status, gender, email, image)
Booking (b_id, pht_id, c_id, status)
10.	Have: packages, booking: 1…*
Packages (p_id, p_name, location, image, price, features, travel_date)
	Booking (b_id, pht_id, c_id, status)
11.	Has: booking, bill: 1…1
Booking (b_id, pht_id, c_id, status)
Bill (bl_id, status, pay_status, c_id, b_id, amount)
12.	Has: booking, review: 1…1
Booking (b_id, pht_id, c_id, status)
	Review (r_id, c_id, comment, status, b_id)
13.	Have: Transport, booking: 1…*
Transport (tr_id, name, type (bus,air,train,car), traveldate, location(form), location(to), ref, seat_no, price, details, count)
Booking (b_id, pht_id, c_id, status)
14.	Have: hotel, booking: 1…*
Hotel (h_id, name, status, ref, price, room_no, details, location, count)
	Booking (b_id, pht_id, c_id, status)
15.	Have: packages, ticket: 1…*
Packages (p_id, p_name, location, image, price, features, travel_date)
Ticket (t_id, status, b_id, price, from_date, no_days, travel_date, seat_no)
16.	Have: hotel, ticket: 1…*
Hotel (h_id, name, status, ref, price, room_no, details, location, count)
	Ticket (t_id, status, b_id, price, from_date, no_days, travel_date, seat_no)



17.	Have: transport, ticket: 1…*
Transport (tr_id, name, type (bus,air,train,car), traveldate, location(form), location(to), ref, seat_no, price, details, count)
Ticket (t_id, status, b_id, price, from_date, no_days, travel_date, seat_no)
18.	Have: booking, booktracking: 1…1
Booking (b_id, pht_id, c_id, status)
Booktracking (bt_id, b_id, c_id, status, active status)

19.	Have: user, booktracking: 1…*
User (c_id, name, dob, age, mobile, address, passport_id, status, gender, email, image)
Booktracking (bt_id, b_id, cid, status, active status)
20.	Has: bill, payment: 1…1
Bill (bl_id, status, pay_status, c_id, b_id, amount)
Payment (py_id, status, c_id, b_id, amount)
21.	Has: booking, payment: 1…1
Booking (b_id, pht_id, c_id, status)
Payment (py_id, status, c_id, b_id, amount)
22.	Has: booking, ticket: 1…1
Booking (b_id, pht_id, c_id, status)
Ticket (t_id, status, b_id, price, from_date, no_days, travel_date, seat_no)




Normalization
1.	Admin (a_id, name, mobile, email, address, age, dob, gender, status)
2.	Customer (c_id, name, dob, age, mobile, address, passport_id, status, gender, email, image)
3.	Emp (e_id, name, dob, salary, address, gender, age, email, mobile, status, a_id)
4.	Packages (p_id, p_name, location, image, price, features, travel_date, a_id)
5.	Transport (tr_id, name, type (bus,air,train,car), traveldate, location(form), location(to), ref, seat_no, price, details, count, e_id)
6.	Hotel (h_id, name, status, ref, price, room_no, details, location, count, e_id)
7.	Ticket (t_id, status, b_id, price, from_date, no_days, travel_date, seat_no, e_id)
8.	Issue (is_id, c_id, comment)
9.	Review (r_id, c_id, comment, status, b_id)
10.	Payment (py_id, status, c_id, b_id, amount, bl_id)
11.	Booking (b_id, pht_id, c_id, status)
12.	Bill (bl_id, status, pay_status, c_id, b_id, amount)
13.	Booktracking (bt_id, b_id, c_id, status, active status)

