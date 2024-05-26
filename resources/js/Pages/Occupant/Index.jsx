import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import { Head, Link } from "@inertiajs/react";
import {
  Card,
  CardContent,
  Table,
  TableBody,
  TableCell,
  TableContainer,
  TableHead,
  TableRow,
  Paper,
  IconButton,
} from "@mui/material";
import EditIcon from "@mui/icons-material/Edit";
import DeleteIcon from "@mui/icons-material/Delete";

export default function Index({ auth, occupants }) {
  return (
    <AuthenticatedLayout
      user={auth.user}
      header={
        <h2 className="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
          Occupants
        </h2>
      }
    >
      <Head title="Occupants" />

      <Card className="px-6">
        <CardContent>
          <TableContainer component={Paper}>
            <Table>
              <TableHead>
                <TableRow>
                  <TableCell>ID</TableCell>
                  <TableCell>Name</TableCell>
                  <TableCell>Email</TableCell>
                  <TableCell>Phone</TableCell>
                  <TableCell>Actions</TableCell>
                </TableRow>
              </TableHead>
              <TableBody>
                {occupants.data.map((occupant) => (
                  <TableRow key={occupant.id}>
                    <TableCell>{occupant.id}</TableCell>
                    <TableCell>{occupant.name}</TableCell>
                    <TableCell>{occupant.email}</TableCell>
                    <TableCell>{occupant.phone}</TableCell>
                    <TableCell>
                      <Link href={route("occupant.edit", occupant.id)}>
                        <IconButton>
                          <EditIcon />
                        </IconButton>
                      </Link>
                      <Link href={route("occupant.destroy", occupant.id)}>
                        <IconButton>
                          <DeleteIcon />
                        </IconButton>
                      </Link>
                    </TableCell>
                  </TableRow>
                ))}
              </TableBody>
            </Table>
          </TableContainer>
        </CardContent>
      </Card>
    </AuthenticatedLayout>
  );
}
